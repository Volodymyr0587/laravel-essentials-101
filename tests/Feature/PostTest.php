<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_have_no_posts_on_welcome_page(): void
    {
        $response = $this->get('/');

        $response->assertSeeText('No Posts Yet');
    }
}
