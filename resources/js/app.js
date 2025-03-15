document.addEventListener('livewire:load', function () {
    let notification = document.getElementById('notification');
    let notificationTimer;

    Livewire.on('taskEvent', function (event) { console.log(event);
        
        // Clear the previous timer if it exists
        if (notificationTimer) {
            clearTimeout(notificationTimer);
        } 

        notification.style.display = 'none';
        notification.innerHTML = '';
        notification.classList.remove('alert-success');
        notification.classList.remove('alert-danger');
        
        switch(event) {
            case 'taskCreated':
                notification.style.display = 'block';
                notification.innerHTML = 'Your task has been created!';
                notification.classList.add('alert-success');
                break;
            case 'taskCompleted':
                notification.style.display = 'block';
                notification.innerHTML = 'Task marked as completed!';
                notification.classList.add('alert-success');
                break;
            case 'taskIncomplete':
                notification.style.display = 'block';
                notification.innerHTML = 'Task marked as incomplete!';
                notification.classList.add('alert-success');
                break;
            case 'taskDeleted':
                notification.style.display = 'block';
                notification.innerHTML = 'Task has been deleted!';
                notification.classList.add('alert-success');
                break;
            case 'error':
                notification.style.display = 'block';
                notification.innerHTML = 'Sorry, there was an error.';
                notification.classList.add('alert-danger');
                break;
        }

        notificationTimer = setTimeout(() => {
            notification.style.display = 'none';
            notification.innerHTML = '';
            notification.classList.remove('alert-success');
            notification.classList.remove('alert-danger');
        }, 3000);
    });
}); 