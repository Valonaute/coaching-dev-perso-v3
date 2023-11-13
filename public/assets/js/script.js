/* Création de la barre représentant l'avancée du scroll */

let progressBarElement = document.getElementById('progress-bar');

window.addEventListener('scroll', (e) => {
    let height = document.body.scrollHeight - window.innerHeight;
    let scrollPosition = document.documentElement.scrollTop;
    let widthToAdd = ((scrollPosition / height) * 100);
    progressBarElement.style.width = `${widthToAdd}%`;
});

// Création du menu hamburger pour le responsive 

let sidenav = document.getElementById("mySidenav");
let openBtn = document.getElementById("openBtn");
let closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

function openNav() {
  sidenav.classList.add("active");
}

function closeNav() {
  sidenav.classList.remove("active");
}

// Menu hamburger footer

let sidenavfooter = document.getElementById("mySidenavFooter");
let openBtnFooter = document.getElementById("openBtnFooter");
let closeBtnFooter = document.getElementById("closeBtnFooter");

openBtnFooter.onclick = openNav;
closeBtnFooter.onclick = closeNav;

openBtnFooter.onclick = openNavFooter;
closeBtnFooter.onclick = closeNavFooter;

function openNavFooter() {
  sidenavfooter.classList.add("active");
}

function closeNavFooter() {
  sidenavfooter.classList.remove("active");
}


