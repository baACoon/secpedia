document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("myModal");
    const closeButton = document.querySelector(".close-btn");
    const gotitButton = document.querySelector(".gotit-btn");


    if (window.location.pathname === "/site/home") {
        sessionStorage.removeItem("modalClosed");
    }

 
    if (!sessionStorage.getItem("modalClosed")) {

        modal.style.display = "flex";
    }


    closeButton.addEventListener("click", function () {
        modal.style.display = "none";

        sessionStorage.setItem("modalClosed", "true");
    });


    gotitButton.addEventListener("click", function () {
        modal.style.display = "none";

        sessionStorage.setItem("modalClosed", "true");
    });
});
