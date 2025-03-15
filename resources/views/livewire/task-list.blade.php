<ul class="list-group">
    <li class="list-group-item fw-bold"><span class="task-number d-inline-block pe-3">#</span> Task</li>
@foreach($tasks as $i => $task)
    <li class="list-group-item task {{ $task->completed ? 'completed' : '' }}">
        <div class="row">
            <div class="col-8 col-sm-8 col-lg-9 col-xl-10 task-name-container d-flex align-items-center">
                <span class="task-number d-inline-block pe-3 fw-bold">{{ ++$i }}</span> <span class="task-name">{{ $task->name }}</span>
            </div>
            <div class="col-4 col-sm-4 col-lg-3 col-xl-2 task-buttons-container text-end">
                <button type="button" class="btn btn-success" wire:click="completeTask({{ $task->id }})">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                        </svg>
                    </i>
                </button>
                <button type="button" class="btn btn-danger" onclick="if(confirm('Are you sure you want to delete this task?')) { @this.call('deleteTask', {{ $task->id }}) }">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </i>
                </button>
            </div>
        </div>
    </li>
@endforeach
</ul>
