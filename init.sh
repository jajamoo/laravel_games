cd /Users/esanul.kahn/ci_laravel_sample/ || exit
composer install && php artisan migrate && php artisan db:seed && php artisan storage:link
