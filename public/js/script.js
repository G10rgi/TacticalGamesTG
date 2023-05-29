const header = document.querySelector("header");
const dropdown = document.querySelector(".dropdown");
const gameslist = document.querySelector(".gameslist");

if (dropdown) {
    dropdown.addEventListener("click", () => {
        gameslist.classList.toggle("active");
    });
}

window.addEventListener("scroll", function () {
    header.classList.toggle("sticky", window.scrollY > 0);
    if (window.scrollY > 0) {
        dropdown.style.color = "black";
        if (gameslist.classList.contains("active"))
            gameslist.classList.remove("active");
    } else {
        dropdown.style.color = "white";
    }
});

window.onscroll = () => {
    menu.classList.remove("bx-x");
    navbar.classList.remove("open");
};

let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

if (menu) {
    menu.onclick = () => {
        menu.classList.toggle("bx-x");
        navbar.classList.toggle("open");
    };
}
