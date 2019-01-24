<?php

namespace App\Console\Commands;

use App\Helpers\ParserCmsSite;
use Illuminate\Console\Command;

class GetEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:email {systems}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $content = new ParserCmsSite();
        $content->getContent($this->argument('systems'));
    }
}
