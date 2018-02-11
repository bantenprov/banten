<?php namespace Bantenprov\Banten\Console\Commands;

use Illuminate\Console\Command;

/**
 * The BantenCommand class.
 *
 * @package Bantenprov\Banten
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class BantenCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:banten';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\Banten package';

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
        $this->info('Welcome to command for Bantenprov\Banten package');
    }
}
