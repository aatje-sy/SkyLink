let accountSideNav = document.getElementById("accountNavContainer");
let sideNavToggle = document.getElementById("sideNavToggle");

if(sideNavToggle){
    console.log("halooooooo")
    sideNavToggle.addEventListener("click", () =>{
        accountSideNav.classList.toggle("active");
    })
}