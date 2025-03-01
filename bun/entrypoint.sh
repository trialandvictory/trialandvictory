#!/bin/bash
set -e

mkdir -p /opt/health
echo "installing" > /opt/health/status

# bun install in the Dockerfile doesn't seem to work that well.
# at least bun is fast so an install here shouldn't be a big problem:
bun install

echo "building" > /opt/health/status

# todo: set node environment

echo "ready" > /opt/health/status
# todo: switch based on prd/dev environment
# bun run build
bun run dev
