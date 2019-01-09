<?php

namespace App\Console\Commands;

use App\Jobs\ParserJob;
use App\Model\Dashboard\Tag;
use Illuminate\Console\Command;

class Parser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parser:tag';

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
        $tags = Tag::all();
        foreach ($tags as $tag) {
            ParserJob::dispatch($tag->name);
        }
    }
}
