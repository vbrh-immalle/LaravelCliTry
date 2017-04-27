<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCoolCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mycool:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Say something cool';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $coolthings = ["Hehe", "ROFL", ":-)", "<g>"];
        print("Yow! I'm an imma(wo)man!" . PHP_EOL);
        print($coolthings[rand(0, count($coolthings) - 1)] . PHP_EOL);
    }
}
