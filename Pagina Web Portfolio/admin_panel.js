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
    console.log('a')
    containerAddItems.classList.toggle('container-item-add-on');
})