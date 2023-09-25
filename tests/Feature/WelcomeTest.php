<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WelcomeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use DatabaseTransactions;
    // public function test_the_welcome_page_works(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    //     $response->assertSeeText('Dashboard');
    // }

    public function test_the_contact_page_works(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
