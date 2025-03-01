#!/bin/sh

set -e  # Exit immediately if a command exits with a non-zero status

echo "Starting Bun container..."

if [ "$APP_ENV" = "production" ]; then
    echo "Running in production mode..."
    bun run build
    echo "ready" > /opt/health/status
    sleep 30  # Give Laravel time to start before the container exits
else
    echo "Running in development mode..."
    echo "ready" > /opt/health/status
    exec bun run dev  # Run bun in dev mode and keep the container alive
    # exec passes ctrl-c better
fi
