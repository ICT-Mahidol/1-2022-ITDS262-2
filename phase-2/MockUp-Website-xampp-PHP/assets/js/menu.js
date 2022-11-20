function myRegister() {
    document.getElementById("Main-page container").style.display = "none";
    document.getElementById("Login-page").style.display = "none";
    //document.getElementById("aboutus-page").style.display = "none";
    document.getElementById("Register-page").style.display = "block";
    document.getElementById("cars-page").style.display = "none";
    document.getElementById("hotel-page").style.display = "none";
}
function myLogin() {
    document.getElementById("Main-page container").style.display = "none";
    document.getElementById("Register-page").style.display = "none";
    //document.getElementById("aboutus-page").style.display = "none";
    document.getElementById("Login-page").style.display = "block";
    document.getElementById("cars-page").style.display = "none";
    document.getElementById("hotel-page").style.display = "none";
}

function myaboutus() {
    document.getElementById("Main-page container").style.display = "block";
    document.getElementById("Register-page").style.display = "none";
    document.getElementById("Login-page").style.display = "none";
    document.getElementById("cars-page").style.display = "none";
    document.getElementById("hotel-page").style.display = "none";
    window.location.href = "#contact";
}


function cars() {
    document.getElementById("Main-page container").style.display = "none";
    document.getElementById("Register-page").style.display = "none";
    document.getElementById("Login-page").style.display = "none";
    document.getElementById("hotel-page").style.display = "none";
    document.getElementById("cars-page").style.display = "block";
}

function hotels() {
    document.getElementById("Main-page container").style.display = "none";
    document.getElementById("Register-page").style.display = "none";
    document.getElementById("Login-page").style.display = "none";
    document.getElementById("cars-page").style.display = "none";
    document.getElementById("hotel-page").style.display = "block";
}