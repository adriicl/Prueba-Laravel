<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_access_the_welcome_page()
    {
        $response = $this->get(route('welcome'));
        $response->assertOk(); // Reemplaza assertStatus(200)
    }

    /** @test */
    public function it_can_access_the_about_page()
    {
        $response = $this->get(route('about'));
        $response->assertOk(); // Reemplaza assertStatus(200)
    }

    /** @test */
    public function it_can_access_the_contact_page()
    {
        $response = $this->get(route('contact'));
        $response->assertOk(); // Reemplaza assertStatus(200)
    }
}
