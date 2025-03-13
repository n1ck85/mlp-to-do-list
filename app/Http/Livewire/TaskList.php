<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskList extends Component
{
    //protected $listeners = ['taskCompleted' => 'refreshTasks'];
    public $tasks;

    public function mount()
    {
        $this->tasks = Task::all();
    }

    public function render()
    {
        return view('livewire.task-list');
    }

    public function completeTask($taskId)
    {
        $task = Task::find($taskId);
        if(!$task) {
            dd('Task not found');
        }

        if ($task->completed) {
            $task->completed = false;
            $task->save();
        }
        else {
            $task->completed = true;
            $task->save();
        }

        $this->tasks = Task::all();
    }

    public function deleteTask($id)
    {
        if(Task::destroy($id)) {
            $this->tasks = Task::all();
        }
        else {}
    }

    // public function confirmDeleteTask()
    // {
    //     Task::find($this->selectedTaskId)->delete();
    //     $this->tasks = Task::all();
    //     $this->selectedTaskId = null;
    //     $this->confirmingDelete = false;
    // }

    // public function cancelDeleteTask()
    // {
    //     $this->selectedTaskId = null;
    //     $this->confirmingDelete = false;
    // }
}
