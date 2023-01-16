
const imageItem = document.getElementById('imageItem'),
lightBoxImageContainer = document.getElementById('lightBoxImageContainer'),
imageLightBox = document.getElementById('imageLightBox')
closeBtn = document.getElementById('close-button');


imageItem.addEventListener('click', () => {
    lightBoxImageContainer.classList.add('dp-on');
});

closeBtn.addEventListener('click', () => {
    lightBoxImageContainer.classList.remove('dp-on');
});