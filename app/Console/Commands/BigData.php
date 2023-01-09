<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class BigData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'big:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach (Post::where('active', 0)->cursor() as $index => $post) {
            // dump($post->title);
            if (!$post->active) {
                DB::table('posts')->where('id', $post->id)->update(['active' => true]);
            }
        }
    }


}
