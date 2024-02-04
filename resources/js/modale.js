// bottoni
const buttons = document.querySelectorAll("button");

buttons.forEach((button, index) => {
    const modali = document.querySelectorAll(".modale");
    const chiudi = document.querySelectorAll(".chiudi");

    // evento al click per mostrare la modale
    button.addEventListener("click", () => {
        modali[index].classList.remove("opacity-0");
        modali[index].classList.add("z-index-2");
    });

    // evento al click per nascondere la modale
    chiudi[index].addEventListener("click", () => {
        modali[index].classList.add("opacity-0");
        modali[index].classList.remove("z-index-2");
    });
});
