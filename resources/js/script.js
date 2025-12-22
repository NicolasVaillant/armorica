const yearSpan = document.getElementById('annee-courante');
if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
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
const closeMenu = () => {
    burger.setAttribute("aria-expanded", "false");
    burger.setAttribute("aria-label", "Ouvrir le menu");
    menu.style.display = 'none';
    burger_icon.classList.replace('fa-times', 'fa-bars')
    document.body.style.overflow = "";
}
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
        link.addEventListener("click", closeMenu());
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && burger.getAttribute("aria-expanded") === "true") {
            burger.click();
        }
    });
}
(function () {
    const form = document.querySelector(".trial-form");
    const statusEl = document.getElementById("form-status");
    if (!form) return;

    function setStatus(msg, isError = false) {
        if (!statusEl) return;
        statusEl.textContent = msg;
        statusEl.style.opacity = "1";
        statusEl.style.color = isError ? "#b91c1c" : ""; // red-ish on error
    }

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.setAttribute("aria-busy", "true");
        }

        setStatus("Envoi en cours…");

        try {
            const formData = new FormData(form);

            const res = await fetch(form.action, {
                method: "POST",
                body: formData,
                headers: { "Accept": "application/json" }
            });

            const data = await res.json().catch(() => null);

            if (!res.ok || !data) {throw new Error("Bad response")}

            if (data.ok) {
                setStatus("Merci ! Votre demande a bien été envoyée. Nous vous recontactons rapidement.");
                form.reset();
            } else {
                setStatus(data.error || "Une erreur est survenue. Merci de réessayer.", true);
            }
        } catch (err) {
            setStatus("Impossible d’envoyer le message pour le moment. Réessayez plus tard.", true);
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.removeAttribute("aria-busy");
            }
        }
    });
})();
const resa = document.querySelector('.header-actions .btn-secondary:not(.burger)');
resa.addEventListener('click', function(){closeMenu()})