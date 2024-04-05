#yes | rm -r ./bootstrap/config.php
#yes | rm -r ./bootstrap/services.json
#yes | rm -r ./bootstrap/compiled.php
php artisan cache:clear
php artisan view:clear
php artisan route:clear
php artisan route:cache
php artisan clear-compiled
php artisan optimize
php artisan config:clear
php artisan config:cache
composer dump-autoload 
