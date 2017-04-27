<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCoolProgressBar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mycool:progressbar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Check this progress bar out! It's completely fake.";

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
        // populate a list with 10 random numbers (between 10 and 100)
        $ns = [];
        for($i = 0; $i < 10; $i++) {
            $ns[$i] = rand(10, 100);
        }

        // create a progress bar with 10 ticks
        $bar = $this->output->createProgressBar(10);

        $this->info("This will take some time.");
        $this->comment("Please press ctrl-c or something...");
        
        $bar->advance();

        // use the random numbers to sleep a bit (use usleep*1000 for ms in stead of sleep for seconds)
        foreach($ns as $n) {
            usleep($n * 1000);
            //sleep($n / 10);
            $bar->advance();
        }        

        $bar->finish();
    }
}
