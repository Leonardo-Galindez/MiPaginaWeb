const navToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");

var section_slider = document.querySelector(".section-slider");
navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("nav-menu_visible");

  if (navMenu.classList.contains("nav-menu_visible")) {
    navToggle.setAttribute("aria-label", "Cerrar menú");
    section_slider.style.display = "none";
  } else {
    navToggle.setAttribute("aria-label", "Abrir menú");
    section_slider.style.display = "block";
  }
});


