<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
 */

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('reset:password', function () {
    DB::table('users')->update(['password' => bcrypt('password')]);
    $this->info('All users password has been reset to default - password');
})->describe('Reset all users password to default. Default passwor is password.');
