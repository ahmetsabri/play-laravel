<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{

    use RefreshDatabase;

    public function test_update_post()
    {
        $user = User::factory()->create();

        $post = Post::factory()->create([
            'user_id' => $user->id,
            'title' => 'hello world',
            'body' => 'thanks for watching'
        ]);

        $uri = route('post.update',[$post]);

        $response = $this->actingAs($user->first())->putJson($uri, [
            'title'=>'new title',
            'body' => 'just test'
        ]);

        $response->assertOk();

        $this->assertDatabaseHas('posts', [
            'id' =>$post->id,
            'title' => 'new title'
        ]);

        $response->assertJsonPath('post.title', 'new title');
        $response->assertJsonStructure(['post'=>['title', 'user_id','body', 'likes']]);
    }
}
