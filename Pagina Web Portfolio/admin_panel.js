const items = Array.from(document.getElementsByClassName('item'));


items.forEach(item => {
    item.addEventListener('click', () => {
        item.classList.toggle('item-on');
    });
});


const btnAddItem = document.getElementById('add-item'),
containerAddItems = document.getElementById('container-add-items');

btnAddItem.addEventListener('click', (e) => {
    e.preventDefault();
    containerAddItems.classList.toggle('container-item-add-on');
})

// EDIT AND DELETE BUTTONS

const editBtns = Array.from(document.getElementsByClassName('edit-btn')),
deleteBtns = Array.from(document.getElementsByClassName('delete-btn')),
containerEditItems = document.getElementById('container-edit-items')

const idInput = document.getElementById('id-item'),
titleInput = document.getElementById('title-input'),
descriptionInput = document.getElementById('description-input'),
categoryInput = document.getElementById('category-input'),
imgInput = document.getElementById('img-input')



editBtns.forEach(element => {
    element.addEventListener('click', (e) => {
        e.preventDefault();

        let id = element.id;

        containerEditItems.classList.toggle('container-item-add-on');

        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', './admin_call_item_edit.php?id=' + id);
        xhttp.onload = () => {
            const data = JSON.parse(xhttp.responseText);

            idInput.value = data[0]['id'];
            titleInput.value = data[0]['title'];
            descriptionInput.value = data[0]['descrip'];
            categoryInput.value = data[0]['category'];
            imgInput.value = data[0]['img'];

        }

        xhttp.send();
    })
});

deleteBtns.forEach(element => {
    element.addEventListener('click', (e) => {
        e.preventDefault()

        let id = element.id;
        console.log(id)

        let option = confirm('Are you sure you want to delete this element?');

        if(option){
            let xhttp = new XMLHttpRequest();

            xhttp.open('GET', './admin_delete.php?id-item=' + id);
            xhttp.send();
        }

        
    })
})



const editSubmit = document.getElementById('edit-submit');