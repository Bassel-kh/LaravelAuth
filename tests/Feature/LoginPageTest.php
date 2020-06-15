<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLoginPage()
    {
        //$response = $this->get('/');
        $response = $this->get('/login'); // php unit isn't install  \vendor\bin\phpunit


        $response->assertStatus(200);
    }
}
