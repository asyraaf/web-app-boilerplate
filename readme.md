# Web Application Boilerplate

## Installation

Clone this boilerplate

```
git clone https://github.com/cleaniquecoders/web-app-boilerplate.git
```

Go into application directory and install all dependencies.

```
cd web-app-boilerplate && composer install
```

Update your database connection in `.env`.

## Login with Facebook

Configure Facebook App Details in the `.env` file. Get the client id and secret from [Facebook for Developers](https://developers.facebook.com) by creating application.

```
FACEBOOK_CLIENT_ID=
FACEBOOK_SECRET=
FACEBOOK_REDIRECT=http://localhost:8000/auth/facebook/callback
```

You may want to refer to [this](https://www.youtube.com/watch?v=jBTEcvriY0U) tutorial if you have any issues with setting up the Facebook login.

## TODO

- [x] Require middleware to check if user not yet activate their account, redirect to resend activation account link
- [x] User Manager
- [x] Error pages - 403, 404, 500
- [ ] Laravel Passport, Consume Own API Middleware
- [ ] Migrate User Manager using VueJs
- [ ] Provide Installer for this boilerplate
- [X] Login with Facebook
