const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event) {
    if (event.type === 'touchstart') event.preventDefault();
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
    const active = nav.classList.contains('active');
    event.currentTarget.setAttribute('aria-expanded', active);
    if (active) {
        event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
    } else {
        event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
    }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

//MOBILE

var btn = document.getElementById('btn-div');
var mobile = '#mobile';
var frontEnd = '#front-end';
var backEnd = '#back-end';
var bancoDeDados = '#banco-de-dados';


function display(){
    document.getElementById('btn-div').style.display = 'none';
}

//FRONT-END

