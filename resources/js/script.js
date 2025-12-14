document.querySelectorAll(".coach-toggle").forEach((btn) => {
    const targetId = btn.getAttribute("aria-controls");
    const text = document.getElementById(targetId);

    // start clamped
    text.classList.add("is-clamped");

    btn.addEventListener("click", () => {
        const expanded = btn.getAttribute("aria-expanded") === "true";
        btn.setAttribute("aria-expanded", String(!expanded));
        text.classList.toggle("is-clamped", expanded);
        btn.textContent = expanded ? "Lire la suite" : "Réduire";
    });
});
// Mise à jour accessible de l’année courante
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