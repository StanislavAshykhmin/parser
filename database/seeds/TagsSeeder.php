<?php

use Illuminate\Database\Seeder;
use App\Model\Dashboard\Tag;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name'=>"Laravel",
        ]);
    }
}
