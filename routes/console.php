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

Artisan::command('hello', function() {
    $this->info("Hello,");
    $this->comment("This is a comment.");
    $this->error("This is (not a real) error.");
    $this->question("Do you like the CLI color scheme?");
})->describe('Say hello and demo the CLI colors');