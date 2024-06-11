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


//* profile photo wrap */
document.addEventListener("DOMContentLoaded", function() {
    const subMenu = document.getElementById("subMenu");
    const profileBtn = document.getElementById("profile-btn");

    document.addEventListener("click", function(event) {
      if (event.target === profileBtn) {
        subMenu.classList.toggle("open-menu");
      } else {
        subMenu.classList.remove("open-menu");
      }
    });
});


document.addEventListener("DOMContentLoaded", function(){
    const loginPopup = document.getElementById("login-popup");
    const closePopup = document.getElementById("popup-close");
    const profileBtn = document.getElementById("profile-btn");
    const registerPopup = document.getElementById("register-popup");
    const closePopup2 = document.getElementById("popup-close2");
    const registerLink = document.getElementById("register-link");




    profileBtn.addEventListener("click", function(){
        loginPopup.style.display = "block";
    })
    closePopup.addEventListener("click", function (){
        loginPopup.style.display = "none";
    })
    registerLink.addEventListener("click", function (){
        registerPopup.style.display = "block";
    })
    closePopup2.addEventListener("click", function (){
        registerPopup.style.display = "none";
        window.location.href = "index.php";
    })

})

// add travel popup
const addTravelBtn = document.getElementById("add-travel");
const addPopup = document.getElementById("add-popup");
const closePopup3 = document.getElementById("popup-close3");

addTravelBtn.addEventListener("click", function (){
    addPopup.style.display = "block";
})
closePopup3.addEventListener("click", function (){
    addPopup.style.display = "none";
})






    
//this is they expand of the searchbar
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



