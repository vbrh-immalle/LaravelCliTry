# CLI commands

- add commands to *the easy way with callbacks* to `routes/console.php`
- add commands *the hard way*
    - `php artisan make:command HelloWorld`
    - edit the `app/Console/Commands/HelloWorld.php` file
    - register the `HelloWorld`-class in the commands in `app/Console/Kernel.php`
