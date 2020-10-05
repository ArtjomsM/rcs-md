$(document).ready(function(){

    $("#jsBtn").click(function() {
        $("ul").after(`<li class="list-group-item"><button type="button" class="btn btn-outline-danger mr-3 list-delete">x</button> ${itemValue}</li>`);
    });


  
  });


  function addNewItem(itemValue) {
    let listItem = document.createElement('li');
    listItem.classList.add('list-group-item');
    listItem.innerHTML = `<button type="button" class="btn btn-outline-danger mr-3 list-delete">x</button> ${itemValue}`;
    todoList.prepend(listItem);
}