<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */

    public function testHome()
    {
    

    $this->visit('/')
         ->click('Home')
         ->seePageIs('/home');
    }

    public function testLogin()
    {
    $this->visit('/login')
         ->type('sudipta@gmail.com', 'email')
         ->type('popoqwqw','password')
         ->press('Login')
         ->seePageIs('/home');
    }


    public function testMyPosts()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
             ->withSession(['email' => 'sudipta@gmail.com','password'=>'popoqwqw'])
             ->visit('/home')
             ->click('My Posts')
             ->seePageIs('/user/'.Auth::user()->id.'/posts');
    }
    public function testRegister()
    {
    $this->visit('/register')
         ->type('newperson','name')
         ->type('something@gmail.com', 'email')
         ->type('popoqwqw','password')
         ->type('popoqwqw','password_confirmation')
         ->press('Register')
         ->seePageIs('/home');
    }
    public function testusersDatabase()
    {
    // Make call to application...

        $this->seeInDatabase('users', ['email' => 'something@gmail.com','name'=>'newperson']);
    }
}
