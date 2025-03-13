<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskList extends Component
{
    public $tasks;
    public $taskName = '';

    public function mount()
    {
        $this->tasks = Task::all();
    }

    public function render()
    {
        return view('livewire.task-list');
    }

    public function create() {

        $this->validate([
            'taskName' => 'required|string|max:255',
        ]);


        $task = new Task;
        $task->name = $this->taskName;
       
        if(!$task->save()) {

        }

        $this->tasks = Task::all();
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
            $this->emit('taskIncomplete');
        }
        else {
            $task->completed = true;
            $task->save();
            $this->emit('taskEvent','taskCompleted');
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
