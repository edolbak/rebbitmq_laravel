<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $aaa = $this->createSmth(someArg: true);
        
        $response->assertStatus(200);
    }

    public function createSmth($someArg=false)
    {
        return  $someArg?'Yes':'No';
    }
}
