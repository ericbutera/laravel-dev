<?php

namespace Tests\Feature;

use App\Models\Todo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TodoFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_displays_todos()
    {
        $todo = Todo::factory()->create(['title' => 'Test Task']);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Test Task');
    }

    public function test_todo_can_be_created()
    {
        $response = $this->post('/todos', [
            'title' => 'New Task',
        ]);

        $response->assertRedirect('/todos');
        $this->assertDatabaseHas('todos', ['title' => 'New Task']);
    }

    public function test_todo_can_be_updated()
    {
        $todo = Todo::factory()->create(['title' => 'Old Title']);

        $response = $this->put("/todos/{$todo->id}", [
            'title'     => 'Updated Title',
            'completed' => true,
        ]);

        $response->assertRedirect('/todos');
        $this->assertDatabaseHas('todos', ['title' => 'Updated Title', 'completed' => true]);
    }

    public function test_todo_can_be_deleted()
    {
        $todo = Todo::factory()->create();

        $response = $this->delete("/todos/{$todo->id}");

        $response->assertRedirect('/todos');
        $this->assertDatabaseMissing('todos', ['id' => $todo->id]);
    }
}
