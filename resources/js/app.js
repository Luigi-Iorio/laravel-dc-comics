import "./bootstrap";

// custom css
import "~resources/scss/app.scss";

// processi img resources/img/
import.meta.glob(["../img/**"]);

// carte
let buttons = document.querySelectorAll("button");

buttons.forEach((button, index) => {
    let modali = document.querySelectorAll(".modale");
    let chiudi = document.querySelectorAll(".chiudi");

    button.addEventListener("click", () => {
        modali[index].classList.remove("opacity-0");
        modali[index].classList.add("z-index-2");
    });

    chiudi[index].addEventListener("click", () => {
        modali[index].classList.add("opacity-0");
        modali[index].classList.remove("z-index-2");
    });
});
