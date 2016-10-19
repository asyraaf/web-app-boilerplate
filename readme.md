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

## TODO

- [x] Require middleware to check if user not yet activate their account, redirect to resend activation account link
- [x] User Manager
- [x] Error pages - 403, 404, 500
- [ ] Laravel Passport, Consume Own API Middleware
- [ ] Migrate User Manager using VueJs
- [ ] Provide Installer for this boilerplate
- [ ] Login with Facebook
