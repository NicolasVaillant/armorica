const yearSpan = document.getElementById('annee-courante');
if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
}
const slider = document.getElementById("slider");
function scrollSlider(direction) {
    const slideWidth = slider.clientWidth;
    slider.scrollBy({
        left: direction * slideWidth,
        behavior: "smooth"
    });
}
if ("IntersectionObserver" in window) {
    const items = document.querySelectorAll(".js-reveal");
    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting){
                    entry.target.classList.remove("is-visible");
                } else {
                    entry.target.classList.add("is-visible");
                    if(
                        entry.target.classList.contains("section-intro") ||
                        entry.target.classList.contains("section-steps")
                    ){obs.unobserve(entry.target)}
                }
            });
        },
        {
            root: null,
            threshold: 0.1,
            rootMargin: "0px 0px -10% 0px"
        }
    );

    items.forEach((el) => observer.observe(el));
} else {
    document.querySelectorAll(".js-reveal").forEach((el) => {
        el.classList.add("is-visible");
    });
}
const burger = document.querySelector(".burger");
const burger_icon = document.querySelector(".burger-icon");
const menu = document.getElementById("mobile-menu");

if (burger && menu) {
    burger.addEventListener("click", () => {
        const isOpen = burger.getAttribute("aria-expanded") === "true";

        burger.setAttribute("aria-expanded", String(!isOpen));
        burger.setAttribute(
            "aria-label",
            isOpen ? "Ouvrir le menu" : "Fermer le menu"
        );

        menu.style.display = (isOpen) ? 'none' : 'flex';
        if(isOpen){
            burger_icon.classList.replace('fa-times', 'fa-bars')
        } else {
            burger_icon.classList.replace('fa-bars', 'fa-times')
        }
        document.body.style.overflow = isOpen ? "" : "hidden";
    });

    menu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
            burger.setAttribute("aria-expanded", "false");
            burger.setAttribute("aria-label", "Ouvrir le menu");
            menu.style.display = 'none';
            burger_icon.classList.replace('fa-times', 'fa-bars')
            document.body.style.overflow = "";
        });
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && burger.getAttribute("aria-expanded") === "true") {
            burger.click();
        }
    });
}