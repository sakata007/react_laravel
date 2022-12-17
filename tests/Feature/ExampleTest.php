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

        // $response->assertStatus(200);
        $response
        ->assertOK()
        ->assertJsonCount($tasks->count());
    }

        /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create()
    {
        $data = [
            'title' => 'sample_test',
            'is_done' => false
        ];


        // $response = $this->get('/');
        $response = $this->postJson('/api/tasks', $data);
        // dd($data);
        dd($response);

        // $response->assertStatus(200);
        $response
        ->assertStatus(201);
        // ->assertJsonCount($tasks->count());
    }
}
