// NAVBAR
var hamburger = document.querySelector(".header-nav-hamburger");
var navLinks = document.querySelector(".header-nav-links");
var links = document.querySelectorAll(".header-nav-links li");

hamburger.addEventListener('click', ()=>{
   // LINKS ANIMATION
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    // HAMBURGUER ANIMATION
    hamburger.classList.toggle("toggle");
});


// MODAL 
var aboutModal = document.getElementById("aboutModal");
var aboutBtn = document.getElementById("aboutBtn");
var aboutClose = document.getElementById("aboutClose");

// OPEN MODAL
aboutBtn.onclick = function() {
    aboutModal.style.display = "block";
}

// CLOSE MODAL
aboutClose.onclick = function() {
    aboutModal.style.display = "none";
}