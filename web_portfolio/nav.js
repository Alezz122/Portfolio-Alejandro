const btnNav = document.getElementById('btn-display-nav'),
navEl = document.querySelector('nav');


btnNav.addEventListener('click', () => {
    navEl.classList.toggle('nav-display');
});