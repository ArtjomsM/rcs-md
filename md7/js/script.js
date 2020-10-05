
const newItemAdd = document.querySelector('#new-item-add'); //atrodam input lauku
const jsBtn = document.querySelector('#jsBtn'); //atrodam pogu
const errorText = document.querySelector('#error-text'); //atrodam kļūdas paziņojuma vietu
const todoList = document.querySelector('#todo-list'); //atrodam input lauku

jsBtn.onclick = function () {
    getNewItem();
};

newItemAdd.onkeypress = (e) => {
    if (e.keyCode == 13){
        getNewItem();
        return false;   
    } 
}

function getNewItem() {
    let newItemAddValue = newItemAdd.value;
    newItemAddValue = newItemAddValue.trim();
    if (newItemAddValue) {
        addNewItem(newItemAddValue);
        newItemAdd.value = "";
        errorText.innerHTML = "";
        newItemAdd.focus();
        // newItemAdd.classList.remove('bg-danger');
        // newItemAdd.classList.remove('text-white');
        newItemAdd.classList.remove('is-invalid');
    } else {
        errorText.innerHTML = "KĻŪDA! Nav ievadīti dati!";
        newItemAdd.focus();
        // newItemAdd.classList.add('bg-danger');
        // newItemAdd.classList.add('text-white');
        newItemAdd.classList.add('is-invalid');
    }
    // let newItemAddValue = document.querySelector.value;
    // console.log(newItemAddValue);
}

function addNewItem(itemValue) {
    let listItem = document.createElement('li');
    listItem.classList.add('list-group-item');
    listItem.innerHTML = `<button type="button" class="btn btn-outline-danger mr-3 list-delete">x</button> ${itemValue}`;
    todoList.prepend(listItem);
}  

let deleteItem = (event) => {
    let a = event.target;
    if (a.classList.contains('list-delete')) {
        a.closest('.list-group-item').remove();
    }
};

todoList.addEventListener("click", deleteItem);

// console.dir(newItemAdd);