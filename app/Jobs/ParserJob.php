<?php

namespace App\Jobs;

use App\Helpers\ParserStackOverflow;
use App\Model\Dashboard\Tag;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ParserJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $tag;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $content = new ParserStackOverflow();
        $records = $content->index($this->tag);
        $save = Tag::where('name', $this->tag)->first();
        foreach ($records as $record) {
            $save->records()->updateOrCreate([
                'title' => $record['title'],
            ],
                [
                    'vote' => $record['vote'],
                    'answer' => $record['answer'],
                    'view' => $record['view'],
                    'url' => $record['link'],
                ]);
        }
    }
}
