var textAnim = document.getElementById('text-anim');


const textsToType = ['I build nice websites', 'I design nice products'];
const speed = 30;

var typed = new Typed('#text-anim', {
    strings: textsToType,
    typeSpeed: speed,
    showCursor: true,
    cursorChar: '|',
    startDelay: 200,
    loop: true
});


const web = document.getElementById('web');

web.addEventListener('mousemove', (e) => {
    console.log('a')
    let x = (window.innerWidth/2- e.pageX) / 20;
    let y = (window.innerWidth/2- e.pageY) / 10;

    web.style.transform = "rotateY("+x+"deg) rotateX("+y+"deg)";
})

