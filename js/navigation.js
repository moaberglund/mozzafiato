"use strict";
//MENY NAVEGERING

const openBtn = document.getElementById("open-menu");
const closeBtn = document.getElementById("close-menu");
openBtn.addEventListener("click", toggleMenu);
closeBtn.addEventListener("click", toggleMenu);

//funktion

function toggleMenu() {
    let navMenuEl = document.getElementById("burger-nav");
    if (navMenuEl.classList.contains("open")) {
        navMenuEl.addEventListener("transitionend", () => {
            navMenuEl.style.visibility = "hidden";
        }, { once: true });
        navMenuEl.classList.remove("open");
    } else {
        navMenuEl.style.visibility = "visible";
        navMenuEl.classList.add("open");
    }
}


document.querySelectorAll("#burger-nav .menu-item-has-children > a").forEach((parentLink) => {
    parentLink.addEventListener("click", (e) => {
        e.preventDefault(); // Hindra länkens standardbeteende

        const subMenu = parentLink.nextElementSibling; // Hämta underlänken (.sub-menu)

        if (subMenu.classList.contains("visible")) {
            subMenu.classList.remove("visible"); // Dölj underlänken
        } else {
            // Dölj andra öppna underlänkar (om du vill ha en "accordion"-effekt)
            document.querySelectorAll("#burger-nav .sub-menu.visible").forEach((menu) => {
                menu.classList.remove("visible");
            });

            subMenu.classList.add("visible"); // Visa aktuell underlänk
        }
    });
});
