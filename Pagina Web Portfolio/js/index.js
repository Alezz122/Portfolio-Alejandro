

var textAnim = document.getElementById('text-anim');


const textsToType = ['Desarrollo webs profesionales', 'Diseño productos de calidad'];
const speed = 30;

var typed = new Typed('#text-anim', {
    strings: textsToType,
    typeSpeed: speed,
    showCursor: true,
    cursorChar: '|',
    startDelay: 200,
    loop: true
});
