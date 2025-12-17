#!/bin/bash

# Arrête le script à la première erreur
set -e

echo "🚀 Déploiement TYPO3 - $(date)"

echo "📦 Composer install"
composer install \
  --no-interaction \
  --prefer-dist \
  --optimize-autoloader

echo "📦 NPM build (packages)"
cd packages

npm install

echo "🏗 Build site: slcreation"
npm run build --site=slcreation

echo "🏗 Build site: thomasbeck"
npm run build --site=thomasbeck

echo "🏗 Build site: educcanine"
npm run build --site=educcanine

cd ..

echo "🧹 Vidage des caches TYPO3"
./vendor/bin/typo3 cache:flush -e Production

echo "✅ Déploiement terminé avec succès"
