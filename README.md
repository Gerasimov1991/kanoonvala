
## Additional Features
* Built-in Laravel Boilerplate Module Generator,
* Dynamic Menu/Sidebar Builder
* Pages Module
* Blog Module
* FAQ Module
* API Boilerplate
* Mailables
* Responses
* Vue Components
* Laravel Mix
* Object based javascript Implementation

**Command list**

    git clone https://github.com/007sunilgautam/kanoon.git
    cd laravel-adminpanel
    cp .env.example .env
    composer install
    npm install
    npm run development
    php artisan storage:link
    php artisan key:generate
    php artisan vendor:publish --tag=lfm_public
    php artisan migrate
    php artisan passport:install

## Logging In

`php artisan db:seed` adds three users with respective roles. The credentials are as follows:

* Backend User: `executive@kanoonwala.com`
* Default User: `user@user.com`
W
Password: `1234`
