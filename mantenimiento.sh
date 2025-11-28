bin/magento cache:disable
rm -rf var/cache/* var/page_cache/* var/view_preprocessed/* generated/*
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento cache:clean
bin/magento cache:enable