document.addEventListener('livewire:load', function () {
    Livewire.on('taskEvent', function (event) { console.log(event);
        switch(event) {
            case 'taskCompleted':
                alert('Task added!');
                break;
            case 'taskDeleted':
                alert('Task deleted!');
                break;
            case 'taskUpdated':
                alert('Task updated!');
                break;
        }
    });
}); 