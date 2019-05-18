<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Factory;
use App\User;
use App\Blog;
use App\Comment;

class BlogControllerTest extends TestCase
{
	protected function setUp()
    {
        /**
         * This disables the exception handling to display the stacktrace on the console
         * the same way as it shown on the browser
         */
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    /*
    public function test_can_create_a_blog()
    {
    	$faker = Factory::create();

    	$response = $this->json('POST', '/create/blog', [

    		'user_id' => User::all()->random()->id,
	        'name' => $faker->word,
	        'category' => $faker->word,
	        'description' => $faker->paragraph(random_int(1, 10)),
	        'image' => $faker->word,

    	]);


        $response->assertStatus(201);
    }
    
    
    public function test_can_comment_on_blog_post()
    {
    	$faker = Factory::create();

    	$response = $this->json('POST', '/comment/blog', [

    		'user_id' => $userID = User::all()->random()->id,
	        'comments_id' => $commentID = Blog::all()->random()->id,
	        'description' => $userComment = $faker->paragraph(random_int(1, 3)),

    	]);

        $response->assertStatus(201);

    	$this->assertDatabaseHas('comments',[

    		'user_id' => $userID,
	        'comments_id' =>  $commentID,
	        'description' => $userComment
    	]);

    }
    */
    public function test_can_display_all_blog_post()
    {
    	
    	$response = $this->json('GET', '/getAll/blog');

        $response->assertStatus(201);

   
    }
    
}
