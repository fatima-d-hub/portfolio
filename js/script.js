// ============================
// SCRIPT.JS - PORTFOLIO FATIMATOU
// ============================

// Sélection du formulaire et des messages
const form = document.getElementById("contactForm");
const successMsg = document.getElementById("successMessage");
const errorMsg = document.getElementById("errorMessage");
const submitBtn = document.getElementById("submitBtn");

// Gestion de l'envoi du formulaire (via FormSubmit, compatible GitHub Pages)
form.addEventListener("submit", function (e) {
    e.preventDefault(); // Empêche le rechargement de la page
    const data = new FormData(form);

    successMsg.style.display = "none";
    errorMsg.style.display = "none";
    submitBtn.disabled = true;
    submitBtn.textContent = i18n.t("form.sending");

    // Même adresse que l'attribut action, mais sur l'endpoint AJAX
    const endpoint = form.action.replace("formsubmit.co/", "formsubmit.co/ajax/");

    fetch(endpoint, {
        method: "POST",
        headers: { "Accept": "application/json" },
        body: data
    })
    .then(response => response.json())
    .then(result => {
        // FormSubmit renvoie success sous forme de chaîne ("true" / "false")
        if (String(result.success) === "true") {
            form.reset(); // Réinitialise le formulaire
            successMsg.style.display = "block"; // Affiche le message de succès

            // Masquer automatiquement le message après 5 secondes
            setTimeout(() => {
                successMsg.style.display = "none";
            }, 5000);
        } else {
            // La raison exacte (ex. formulaire non activé) est visible dans la console (F12)
            console.error("FormSubmit :", result.message);
            errorMsg.style.display = "block";
        }
    })
    .catch(error => {
        console.error("Erreur réseau :", error);
        errorMsg.style.display = "block";
    })
    .finally(() => {
        submitBtn.disabled = false;
        submitBtn.textContent = i18n.t("form.send");
    });
});

// Masquer les messages dès que l'utilisateur modifie un champ
form.querySelectorAll("input, textarea").forEach(input => {
    input.addEventListener("input", () => {
        successMsg.style.display = "none";
        errorMsg.style.display = "none";
    });
});


// Bouton "Voir plus / Voir moins" des projets
const btnVoirPlus = document.getElementById('voirPlusProjets');
const hiddenProjects = document.querySelectorAll('.hidden-project');

btnVoirPlus.addEventListener('click', () => {
    const ouvert = btnVoirPlus.getAttribute('aria-expanded') === 'true';
    hiddenProjects.forEach(p => p.classList.toggle('show', !ouvert));
    btnVoirPlus.setAttribute('aria-expanded', String(!ouvert));
    // La clé data-i18n suit l'état du bouton, pour rester traduite si on change de langue
    btnVoirPlus.dataset.i18n = ouvert ? "projects.more" : "projects.less";
    btnVoirPlus.textContent = i18n.t(btnVoirPlus.dataset.i18n);
});


// Fermer le menu mobile après un clic sur un lien
document.querySelectorAll('#menu .nav-link').forEach(link => {
    link.addEventListener('click', () => {
        const menu = document.getElementById('menu');
        if (menu.classList.contains('show')) {
            bootstrap.Collapse.getOrCreateInstance(menu, { toggle: false }).hide();
        }
    });
});


// Mode clair / sombre (le thème initial est appliqué dans le <head> de index.html)
document.getElementById('themeToggle').addEventListener('click', () => {
    const racine = document.documentElement;
    const theme = racine.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark';
    racine.setAttribute('data-bs-theme', theme);
    try { localStorage.setItem('theme', theme); } catch (e) {}
});
