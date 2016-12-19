# Web Application Boilerplate

## Installation

Create new project

```
composer create-project cleaniquecoders/web-app-boilerplate
```

Go into application directory and install all dependencies.

```
cd web-app-boilerplate && composer install
```

Update your database connection in `.env`.

## Login with Facebook

Configure Facebook App Details in the `.env` file and set the `config/auth.php` the `oauth.facebook` key to true to enable login with Facebook.

Get the client id and secret from [Facebook for Developers](https://developers.facebook.com) by creating application.

```
FACEBOOK_CLIENT_ID=
FACEBOOK_SECRET=
FACEBOOK_REDIRECT=http://localhost:8000/auth/facebook/callback
```

You may want to refer to [this](https://www.youtube.com/watch?v=jBTEcvriY0U) tutorial if you have any issues with setting up the Facebook login.

## Login via API

API endpoint to login, using http method of `POST`. Login using `email` and `password` field.

```
http://domain.com/api/auth
```

You should get something like this once you're successfully logged in.

```
{"token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9hcGlcL2F1dGgiLCJpYXQiOjE0NzY5NzMyOTAsImV4cCI6MTQ3Njk3Njg5MCwibmJmIjoxNDc2OTczMjkwLCJqdGkiOiJkYzY3NjMxOTQ3MzYzMmFjMjQ4ZDg0ODgzZTI1N2M3ZiJ9.k5b8ubtSTRi6T8_kqLbxzmN4atC2v4XKAvmyn4a2YEI"}
```

## Themes

This web app boilerplate comes with pre-installed and configured with Laravel Theme Maker, [Themer](https://github.com/cleaniquecoders/themer). 

Following are common commands can be use for theme development.

### Create a new theme skeleton

```
php artisan make:theme name
```

Your theme will be under `resources/views/themes` directory.

### Middleware

The [Themer](https://github.com/cleaniquecoders/themer) provide a middleware for you to load the target theme for particular route. 

```php
Route::get('dashboard','HomeController@index')->middleware('theme:public');
```

OR

```php
Route::get('dashboard','HomeController@index')->middleware('theme:admin');
```

## TODO

- [x] Require middleware to check if user not yet activate their account, redirect to resend activation account link
- [x] User Manager
- [x] Error pages - 403, 404, 500
- [ ] Laravel Passport, Consume Own API Middleware
- [ ] Migrate User Manager using VueJs
- [ ] Provide Installer for this boilerplate
- [x] Login with Facebook
- [x] JWT
- [x] Laravel Collective
- [x] Support Themes
