// ============================
// SCRIPT.JS - PORTFOLIO FATIMATOU
// ============================

// Sélection du formulaire et du message de succès
const form = document.getElementById("contactForm");
const successMsg = document.getElementById("successMessage");

// Gestion de l'envoi du formulaire
form.addEventListener("submit", function (e) {
    e.preventDefault(); // Empêche le rechargement de la page
    const data = new FormData(form);

    fetch("php/traitement.php", {
        method: "POST",
        body: data
    })
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            form.reset(); // Réinitialise le formulaire
            successMsg.style.display = "block"; // Affiche le message de succès

            // Masquer automatiquement le message après 5 secondes
            setTimeout(() => {
                successMsg.style.display = "none";
            }, 5000);
        } else {
            alert("Erreur lors de l'envoi : " + result.error);
        }
    })
    .catch(error => alert("Erreur réseau : " + error));
});

// Masquer le message de succès dès que l'utilisateur modifie un champ
form.querySelectorAll("input, textarea").forEach(input => {
    input.addEventListener("input", () => {
        successMsg.style.display = "none";
    });
});


const btnVoirPlus = document.getElementById('voirPlusProjets');
const hiddenProjects = document.querySelectorAll('.hidden-project');

btnVoirPlus.addEventListener('click', () => {
    hiddenProjects.forEach(p => {
        if (!p.classList.contains('show')) {
            p.classList.add('show');   // ajoute la classe pour afficher
            btnVoirPlus.textContent = "Voir moins";
        } else {
            p.classList.remove('show'); // cache à nouveau
            btnVoirPlus.textContent = "Voir plus";
        }
    });
});


window.addEventListener('scroll', () => {
  const skills = document.querySelectorAll('.skill-fill');
  skills.forEach(skill => {
    const rect = skill.getBoundingClientRect();
    if(rect.top < window.innerHeight - 50) {
      skill.style.width = skill.style.getPropertyValue('--width');
    }
  });
});
