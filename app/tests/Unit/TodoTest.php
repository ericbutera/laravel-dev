<?php
namespace Tests\Unit;

use App\Models\Todo;
use Tests\TestCase;

class TodoTest extends TestCase
{
    public function test_todo_can_be_created()
    {
        $todo = Todo::factory()->make([
            'title'     => 'Finish writing tests',
            'completed' => false,
        ]);

        $this->assertInstanceOf(Todo::class, $todo);
        $this->assertEquals('Finish writing tests', $todo->title);
        $this->assertFalse($todo->completed);
    }

    public function test_todo_can_be_marked_completed()
    {
        $todo = Todo::factory()->create(['completed' => false]);

        $todo->completed = true;

        $this->assertTrue($todo->completed);
    }
}
