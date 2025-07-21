#!/usr/bin/env bash

docker run \
  --user root \
  --rm \
  --volume  "$(pwd):/var/www/html/eduacademy" \
  wordpress:cli bash -c 'php -d memory_limit=1024M "$(which wp)" i18n make-pot ./eduacademy/ ./eduacademy/languages/eduacademy.pot --headers={\"Last-Translator\":\"friends@themeisle.com\"\,\"Project-Id-Version\":\"Eduacademy\"\,\"Report-Msgid-Bugs-To\":\"https://github.com/Codeinwp/eduacademy/issues\"\} --allow-root --exclude=dist,build,bundle,e2e-tests '