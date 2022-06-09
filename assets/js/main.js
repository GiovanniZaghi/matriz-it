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


function changeDisplay(idNameChange) {
    var idChangeMobile = document.getElementById("mobile");
    var idChangeFront = document.getElementById("front-end");
    var idChangeBack = document.getElementById("back-end");
    var idChangeDBA = document.getElementById("dba");

    if (idNameChange === 'mobile') {
        idChangeFront.style.display = "none";
        idChangeBack.style.display = "none";
        idChangeDBA.style.display = "none";

        if (idChangeMobile.style.display === "block") {
            idChangeMobile.style.display = "none";
        } else {
            idChangeMobile.style.display = "block";
        }
    } else if (idNameChange === 'front-end') {
        idChangeMobile.style.display = "none";
        idChangeBack.style.display = "none";
        idChangeDBA.style.display = "none";

        if (idChangeFront.style.display === "block") {
            idChangeFront.style.display = "none";
        } else {
            idChangeFront.style.display = "block";
        }
    }else if(idNameChange === 'back-end'){
        idChangeMobile.style.display = "none";
        idChangeFront.style.display = "none";
        idChangeDBA.style.display = "none";

        if (idChangeBack.style.display === "block") {
            idChangeBack.style.display = "none";
        } else {
            idChangeBack.style.display = "block";
        }
    }else if(idNameChange === 'dba'){
        idChangeMobile.style.display = "none";
        idChangeFront.style.display = "none";
        idChangeBack.style.display = "none";
        
        if (idChangeDBA.style.display === "block") {
            idChangeDBA.style.display = "none";
        } else {
            idChangeDBA.style.display = "block";
        }
    }


}

//FRONT-END

