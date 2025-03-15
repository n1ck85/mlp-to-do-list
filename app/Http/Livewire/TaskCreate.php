<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskCreate extends Component
{
    public $taskName = '';

    public function render()
    {
        return view('livewire.task-create');
    }

    public function create() {

        $validation = $this->validate([
            'taskName' => 'required|string|max:255|unique:tasks,name',
        ]);

        $task = new Task;
        $task->name = $this->taskName;
       
        if(!$task->save()) {
            $this->emit('taskEvent','error');
            return;
        }
        
        $this->emit('taskEvent','taskCreated');
        $this->emit('refreshTaskList');

        $this->taskName = '';
    }
}
