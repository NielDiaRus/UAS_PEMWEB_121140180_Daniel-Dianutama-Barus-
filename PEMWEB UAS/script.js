
function addTask() {
    
    var task = document.getElementById('task').value;
    var priority = document.getElementById('priority').value;
    var completed = document.getElementById('completed').checked ? 'Yes' : 'No';
    var category = document.querySelector('input[name="category"]:checked').value;

    
    if (task.trim() === '') {
        alert('Task cannot be empty!');
        return;
    }

    
    var newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td>${task}</td>
        <td>${priority}</td>
        <td>${completed}</td>
        <td>${category}</td>
    `;

    
    document.getElementById('taskList').appendChild(newRow);

    
    document.getElementById('task').value = '';
    document.getElementById('priority').value = 'Low';
    document.getElementById('completed').checked = false;
    document.querySelector('input[name="category"][value="Work"]').checked = true;
}


document.getElementById('todoForm').addEventListener('submit', function (event) {
    event.preventDefault(); 
    addTask();
});


document.getElementById('task').addEventListener('input', function () {
   
    var taskValue = this.value.trim();
    if (taskValue === '') {
        this.setCustomValidity('Task cannot be empty!');
    } else {
        this.setCustomValidity('');
    }
});
