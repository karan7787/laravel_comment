<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

//use App\Post;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //Given I have two records in the db that are posts,--->sets up world for test
     //   $first=factory(Post::class)->create();
      //  $second=factory(Post::class)->create([
            
        //    'created_at' => \Carbon\Carbon::now()->subMonth()
            
        //	]);
        //and each one is posted a month apart
        
        //When i fetch the archives.-----> perform the actions
       //$posts= Post::archives();

        //then the response should be in the proper format.---> creates the assertion
          $this->assertTrue(true);



    }
}
