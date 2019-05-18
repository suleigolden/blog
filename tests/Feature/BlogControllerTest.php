<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Factory;
use App\User;

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

    
    public function test_can_create_a_blog()
    {
    	$faker = Factory::create();

    	$response = $this->json('POST', '/create/blog', [

    		'user_id' => User::all()->random()->id,
	        'title' => $faker->word,
	        'category' => $faker->word,
	        'details' => $faker->paragraph(random_int(1, 10)),
	        'image' => $faker->word,

    	]);


        $response->assertStatus(201);
    }
    // public function testCan_generate_Company_Details()
    // {
    //     $response = $this->post('/generateCompanyDetails');

    //     $response->assertStatus(201);
    // }
}
