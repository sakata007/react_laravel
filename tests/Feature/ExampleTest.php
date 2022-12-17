<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $tasks = Task::factory()->count(10)->create();
        // dd(($tasks)->toArray());

        // $response = $this->get('/');
        $response = $this->getJson('api/tasks');
        dd($response->json());

        // $response->assertStatus(200);
        $response
        ->assertOK()
        ->assertJsonCount($tasks->count());
    }
}
