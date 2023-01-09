<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ChangeActive extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'change:active';

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

        $posts =  Post::where('active', 1)->take(100000)->get();

        $affectedRows = 0;
        foreach ($posts as $post) {
            $post->active = 0;
            $post->save();
            $affectedRows++;
        }

        Log::info('Affected Updated Rows is  '. $affectedRows);
    }
}
