<div>
    <input class="form-control" type="text" placeholder="Insert task name" wire:model="taskName" wire:keydown.enter="create" />
    @error('taskName') <span class="text-danger">{{ $message }}</span> @enderror
    <button class="btn btn-primary w-100 my-2" wire:click="create">Add</button>
</div>