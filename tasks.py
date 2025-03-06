# /// script
# requires-python = ">=3.12"
# dependencies = [
#   "edwh",
# ]
# ///
import os
from pathlib import Path

import edwh
from edwh import DOCKER_COMPOSE
from edwh.tasks import require_sudo
from edwh import improved_task as task
from edwh.__about__ import __version__ as EDWH_VERSION
from invoke import Context
from termcolor import cprint

MINIMAL_REQUIRED_EDWH_VERSION = "0.55.0"

if EDWH_VERSION < MINIMAL_REQUIRED_EDWH_VERSION:
    # todo: natural sort?
    cprint(
        f"Note: your `edwh` tool might be outdated ({EDWH_VERSION} < {MINIMAL_REQUIRED_EDWH_VERSION}). "
        "If this leads to weird behavior, try running `edwh self-update`",
        color="yellow",
    )


@task()
def artisan(ctx: Context, args: str):
    """
    Run php artisan command in Docker.
    """
    result = ctx.run(
        f"{DOCKER_COMPOSE} run --rm laravel php artisan {args}", hide=True, warn=True
    )
    if result.ok:
        return result.stdout.strip()
    else:
        raise ValueError(result)

@task(pre=[require_sudo])
def setup_groups(c: Context, name = "laravel"):
    c.sudo(f"groupadd --gid 1050 {name}")
    c.sudo(f"useradd --uid 1050 -g {name} {name}")
    c.sudo(f"usermod -aG {name} $USER")

    print("Done setting up user/group 1050. You should probably reboot now.")

@task()
def check_groups(c: Context):
    lines = c.run("grep 1050 /etc/group", hide=True, warn=True).stdout.strip()
    if groupname := lines.split(":")[0]:
        print(f"✓ Group 1050/{groupname} exists.")
        return groupname
    else:
        print("× no group 1050. You should probably run `edwh local.setup-groups`")
        return None

@task()
def fix_permissions(c: Context):
    if group := check_groups(c):
        c.sudo(f"chown -R {group}:{group} ./laravel")
        c.sudo("chmod -R 770 ./laravel")
        print(f"✓ Fixed permissions of ./laravel (for {group})")

@task()
def setup(ctx: Context):
    dotenv_path = Path(".env")
    if not dotenv_path.exists():
        dotenv_path.touch()

    app_env = edwh.check_env(
        key="APP_ENV",
        default="local",
        comment="Application environment (local/prd)",
    )

    is_local = app_env == "local"

    hosting_domain = edwh.check_env(
        key="HOSTINGDOMAIN",
        default="localhost" if is_local else "trialandvictory.nl",
        comment="hostname like trialandvictory.nl; localhost",
    )

    accept_defaults = (
        edwh.check_env(
            key="ACCEPT_DEFAULTS",
            default="1" if is_local else "0",
            comment="Would you like to skip the rest of the questions? [0/1]",
        )
        == "1"
    )

    edwh.check_env(
        key="APP_DEBUG",
        default="true" if is_local else "false",
        comment="Debug mode (show PHP errors)?",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="APP_NAME",
        default="Trial and Victory",
        comment="Application name",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="APP_KEY",
        default=lambda: artisan(ctx, "key:generate --show"),
        comment="Application key",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="PROJECT",
        default=os.getcwd().rsplit("/", 1)[-1].replace(".", "-"),
        comment="Name of the current directory (used for docker and traefik prefixes/suffixes, to make containers unique)",
        force_default=accept_defaults,
    )

    schema = "http" if is_local else "https"
    edwh.check_env(
        key="APP_URL",
        default=f"{schema}://{hosting_domain}",
        comment="Application URL",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="APP_PORT",
        default="8000",
        comment="PHP Port",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="APP_LOCALE",
        default="en",
        comment="Application locale",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="APP_FALLBACK_LOCALE",
        default="en",
        comment="Fallback locale",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="APP_FAKER_LOCALE",
        default="en_US",
        comment="Faker locale",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="APP_MAINTENANCE_DRIVER",
        default="file",
        comment="Maintenance driver",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="PHP_CLI_SERVER_WORKERS",
        default="4",
        comment="PHP CLI server workers",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="BCRYPT_ROUNDS",
        default="12",
        comment="Bcrypt rounds",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="LOG_CHANNEL",
        default="stack",
        comment="Log channel",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="LOG_STACK",
        default="single",
        comment="Log stack type",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="LOG_DEPRECATIONS_CHANNEL",
        default="null",
        comment="Log deprecations channel",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="LOG_LEVEL",
        default="debug",
        comment="Log level",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="DB_CONNECTION",
        default="sqlite",
        comment="Database connection",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="SESSION_DRIVER",
        default="database",
        comment="Session driver",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="SESSION_LIFETIME",
        default="120",
        comment="Session lifetime in minutes",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="SESSION_ENCRYPT",
        default="false",
        comment="Session encryption",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="SESSION_PATH",
        default="/",
        comment="Session path",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="SESSION_DOMAIN",
        default="null",
        comment="Session domain",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="BROADCAST_CONNECTION",
        default="log",
        comment="Broadcast connection",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="FILESYSTEM_DISK",
        default="local",
        comment="Filesystem disk",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="QUEUE_CONNECTION",
        default="database",
        comment="Queue connection",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="CACHE_STORE",
        default="database",
        comment="Cache store",
        force_default=accept_defaults,
    )

    # edwh.check_env(
    #     key="MEMCACHED_HOST",
    #     default="127.0.0.1",
    #     comment="Memcached host",
    #     force_default=accept_defaults,
    # )
    #
    # edwh.check_env(
    #     key="REDIS_CLIENT",
    #     default="phpredis",
    #     comment="Redis client",
    #     force_default=accept_defaults,
    # )
    # edwh.check_env(
    #     key="REDIS_HOST",
    #     default="127.0.0.1",
    #     comment="Redis host",
    #     force_default=accept_defaults,
    # )
    # edwh.check_env(
    #     key="REDIS_PASSWORD",
    #     default="null",
    #     comment="Redis password",
    #     force_default=accept_defaults,
    # )
    # edwh.check_env(
    #     key="REDIS_PORT",
    #     default="6379",
    #     comment="Redis port",
    #     force_default=accept_defaults,
    # )

    edwh.check_env(
        key="MAIL_MAILER",
        default="log",
        comment="Mail mailer",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="MAIL_SCHEME",
        default="null",
        comment="Mail scheme",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="MAIL_HOST",
        default="127.0.0.1",
        comment="Mail host",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="MAIL_PORT",
        default="2525",
        comment="Mail port",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="MAIL_USERNAME",
        default="null",
        comment="Mail username",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="MAIL_PASSWORD",
        default="null",
        comment="Mail password",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="MAIL_FROM_ADDRESS",
        default="contact@example.com",
        comment="Mail from address",
        force_default=accept_defaults,
    )
    edwh.check_env(
        key="MAIL_FROM_NAME",
        default="${APP_NAME}",
        comment="Mail from name",
        force_default=accept_defaults,
    )

    # edwh.check_env(
    #     key="AWS_ACCESS_KEY_ID",
    #     default="",
    #     comment="AWS access key ID",
    #     force_default=accept_defaults,
    # )
    # edwh.check_env(
    #     key="AWS_SECRET_ACCESS_KEY",
    #     default="",
    #     comment="AWS secret access key",
    #     force_default=accept_defaults,
    # )
    # edwh.check_env(
    #     key="AWS_DEFAULT_REGION",
    #     default="us-east-1",
    #     comment="AWS default region",
    #     force_default=accept_defaults,
    # )
    # edwh.check_env(
    #     key="AWS_BUCKET",
    #     default="",
    #     comment="AWS bucket",
    #     force_default=accept_defaults,
    # )
    # edwh.check_env(
    #     key="AWS_USE_PATH_STYLE_ENDPOINT",
    #     default="false",
    #     comment="Use path style endpoint",
    #     force_default=accept_defaults,
    # )

    edwh.check_env(
        key="VITE_APP_NAME",
        default="${APP_NAME}",
        comment="Vite application name",
        force_default=accept_defaults,
    )

    edwh.check_env(
        key="VITE_PORT",
        default="5173",
        comment="Vite (dev) port",
        force_default=accept_defaults,
    )

    fix_permissions(ctx)