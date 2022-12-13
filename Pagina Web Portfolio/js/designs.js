const worksItems = Array.from(document.getElementsByClassName('grid-item')),
itemsData = Array.from(document.getElementsByClassName('item-data'));

worksItems.forEach(item => {
    item.addEventListener('mouseover', () => {
        item.childNodes[3].classList.add('over-data');
    })
});

worksItems.forEach(item => {
    item.addEventListener('mouseout', () => {
        item.childNodes[3].classList.remove('over-data');
    })
});