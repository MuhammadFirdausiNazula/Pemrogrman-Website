const textInput = document.getElementById('taskinput'); 
const textList = document.getElementById('task-list'); 


function addTask() {
    const textValue = textInput.value.trim();
    if (textValue === '') {
        alert('Silakan isi tugas!');
        return;
    }

    
    const listItem = document.createElement('li');
    listItem.innerHTML = `
        <span class="task-item">${textValue}</span>
        <button onclick="editTask(this)">Edit</button>
        <button onclick="deleteTask(this)">Hapus</button>
    `;
    textList.appendChild(listItem); 
    textInput.value = ''; 
}


function editTask(editButton) {
    const listItem = editButton.parentElement; 
    const taskText = listItem.querySelector('.task-item'); 

    
    const taskInput = document.createElement('input');
    taskInput.type = 'text';
    taskInput.value = taskText.textContent;
    taskInput.classList.add('task-edit-input');

    
    listItem.replaceChild(taskInput, taskText);

    
    editButton.textContent = 'Simpan';
    editButton.setAttribute('onclick', 'saveTask(this)');
}


function saveTask(saveButton) {
    const listItem = saveButton.parentElement; 
    const taskInput = listItem.querySelector('.task-edit-input'); 


    const taskText = document.createElement('span');
    taskText.classList.add('task-item');
    taskText.textContent = taskInput.value;

    
    listItem.replaceChild(taskText, taskInput);


    saveButton.textContent = 'Edit';
    saveButton.setAttribute('onclick', 'editTask(this)');
}


function deleteTask(deleteButton) {
    const listItem = deleteButton.parentElement; 
    textList.removeChild(listItem); 
}