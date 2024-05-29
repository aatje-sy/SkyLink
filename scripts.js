const navLinks = document.getElementById("nav-links");
const navToggle = document.getElementById("nav-toggle");
const navClose = document.getElementById("nav-close");

/* nav show */
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navLinks.classList.add("show-nav");
  });
}

/* nav hide */
if (navClose) {
  navClose.addEventListener("click", () => {
    navLinks.classList.remove("show-nav");
  });
}





document.addEventListener('DOMContentLoaded', function() {
    const locationInput = document.querySelector('.location-input');
    const vacationInfoInput = document.querySelector('.vacation-Info-Input');

    locationInput.addEventListener('input', function() {
        if (this.value.trim() !== '') {
            vacationInfoInput.classList.add('focused');
            vacationInfoInput.classList.add('expanded');
        } else {
            vacationInfoInput.classList.remove('focused');
            vacationInfoInput.classList.remove('expanded');
        }
    });
});

//this is the check in input tye changer:



