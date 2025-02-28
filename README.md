

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

## Static Files
Deze repo bevat SCSS en Typescript support met Vite.
Standaard worden deze files gebundled voordat Laravel gestart wordt (zie `entrypoint.sh`).
Voor lokale development kun je in de `laravel/app` folder `bun dev` uitvoeren en dan zal de frontend live bijwerken.

> Todo: bun in een eigen container gooien zodat die niet lokaal geinstalleerd hoeft te zijn.
> In dev-omgeving kan die dan hot blijven draaien en in productie release bundle maken en exit.

## Nieuwe Laravel App Maken:
```bash
docker run --rm -v $(pwd):/app -w /app composer:latest composer create-project --prefer-dist laravel/laravel naam-van-de-app
```

