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
