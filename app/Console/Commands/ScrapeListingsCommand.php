<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScrapeListingsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:listings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrapes listings from available targets';

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
     * @return int
     */
    public function handle()
    {
        //exec('node scraper.js', $output);

        //print_r($output);

        $this->info("script ran");
        return 0;
    }
}
