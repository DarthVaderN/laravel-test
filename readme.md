<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel-test
Make CustomSessianHandler class implementing  SessionHandlerInterface and save session on sessions table use custom  app-database session driver.
Make Artisan Console command clear sessions data on session table 
- App\Exceptions\CustomSessionHandler 
- App\Providers\AppServiceProvider
- App\Console\Commands\ClearSessions
- Dump database stored in the root directory : laravel.sql


When making simultaneous XHR requests, session data may be lost due to concurrent requests updating the session at the same time. This is a known issue. One solution may be reducing the number of requests, or use *session locking *. This allows to lock the session file when used, hence forcing all requests to be executed one after the other. This may slow down your app, but eliminate the potential errors.
Laravel does not include session locking by default.

## NOTE
- Verification email make with mailtrap demo inbox

- Need npm for ui laravel . run command : npm install ,npm run dev

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

- PHP >= 7.2.0
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension


=======================================================================

## Local Development Server
   If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:
   
   php artisan serve





## License
The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
