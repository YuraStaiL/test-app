#!/bin/bash
SCRIPTPATH="$( cd "$(dirname "$0")" ; pwd -P )"

if [ -f phpcs-cache.zip ]; then
    unzip -o phpcs-cache.zip
else
    mkdir -p phpcs-cache
fi

case "$2" in
 diff) REPORT="diff" ;;
 *) REPORT="summary" ;;
esac

echo $REPORT;

vendor/bin/phpcs \
    -mp \
    --report-file=phpcs-report \
    --extensions=php,inc,gs \
    --report="$REPORT" \
    -d memory_limit=4096M \
    --standard=phpcs-ruleset.xml \
    --cache=phpcs-cache/phpcs.cache \
    --parallel=5 \
    --basepath=$SCRIPTPATH \
    --ignore=*/tests/*,config/* \
    .

cat phpcs-report

if [ -f phpcs-cache ]; then
    rm -f phpcs-cache.zip
    zip -r phpcs-cache.zip phpcs-cache
fi

# Fail the build if TOTAL ERRORS or WARNINGS increases
awk '{if ($2=="TOTAL" && ($4>0 || $7>0)) {print "\033[31mERROR: Total number of failures has increased!\033[0m"; err=1;}} END {exit err}' phpcs-report
if [ $? -eq 0 ]; then
    echo -e "\033[32mSUCCESS: Total number of failures is acceptable.\033[0m"
    exit 0;
else
    exit 1
fi
