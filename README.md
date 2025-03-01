

## Permissions
`entrypoint.sh` zorgt dat de permissions van de Laravel app op 770 (alle rechten voor user+groep, geen voor others) staan met user en group id op 1050.
Je kan dit zo op je eigen machine aanmaken:

```bash
groupadd --gid 1050 laraver
useradd --uid 1050 -g laravel laravel
usermod -aG laravel $USER # <- voeg jezelf toe aan die groep
# de naam 'laravel' mag je veranderen als de id 1050 maar gelijk blijft
```

Hierna moet je opnieuw opstarten/inloggen om de groepsverandering actief te maken.
Als iets zeurt over rechten kun je dat hierna fixen met:
```bash
sudo chown -R laravel:laravel ./laravel
sudo chmod -R 770 ./laravel
```

## Static Files
Deze repo bevat SCSS en TypeScript support met Vite.
Standaard worden deze files gebundeld voordat Laravel gestart wordt (zie `docker/bun/entrypoint.sh`).

Bun draait nu in een aparte container en wordt automatisch gestart via Docker.
- In **development** (`APP_ENV=local`) blijft `bun run dev` draaien voor live-updates.
- In **production** (`APP_ENV=production`) wordt `bun run build` uitgevoerd en stopt de container daarna automatisch.

## Nieuwe Laravel App Maken:
```bash
docker run --rm -v $(pwd):/app -w /app composer:latest composer create-project --prefer-dist laravel/laravel naam-van-de-app
```

