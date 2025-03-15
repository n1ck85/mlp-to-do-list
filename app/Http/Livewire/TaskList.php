<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskList extends Component
{
    public $tasks;

    protected $listeners = ['refreshTaskList' => 'refreshTasks'];

    public function mount()
    {
        $this->tasks = Task::all();
    }

    public function render()
    {
        return view('livewire.task-list');
    }

    public function refreshTasks()
    {
        $this->tasks = Task::all();
    }
    
    public function completeTask($taskId)
    {
        $task = Task::find($taskId);
        if(!$task) {
            $this->emit('taskEvent', 'error');
        }

        if ($task->completed) {
            $task->completed = false;
            $task->save();
            $this->emit('taskEvent', 'taskIncomplete');
        }
        else {
            $task->completed = true;
            $task->save();
            $this->emit('taskEvent','taskCompleted');
        }

        $this->refreshTasks();
    }

    public function deleteTask($id)
    {
        if(Task::destroy($id)) {
            $this->emit('taskEvent','taskDeleted');
            $this->refreshTasks();
        }
        else {
            $this->emit('taskEvent','error');
        }
    }    
}
