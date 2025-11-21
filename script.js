// --- MENU BURGER --- //
const burger = document.querySelector(".burger");
const navLinks = document.querySelector(".nav-links");
const closeBtn = document.querySelector(".close-btn");

// Ouvrir / fermer le menu
burger.addEventListener("click", function () {
  navLinks.classList.toggle("open");
});

closeBtn.addEventListener("click", function () {
  navLinks.classList.remove("open");
});


// --- NEWSLETTER --- //
const form = document.getElementById('newsletterForm');
const emailInput = document.getElementById('email');
const consentCheckbox = document.getElementById('consent');
const msg = document.getElementById('msg');

form.addEventListener('submit', function (e) {
  e.preventDefault(); // bloque l'envoi automatique

  const email = emailInput.value.trim();
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Vérification email
  if (!emailRegex.test(email)) {
    msg.textContent = "❌ Email invalide, veuillez réessayer.";
    msg.style.color = "red";
    return;
  }

  // Vérification consentement
  if (!consentCheckbox.checked) {
    msg.textContent = "❌ Tu dois accepter la Politique de Confidentialité.";
    msg.style.color = "red";
    return;
  }

  // Message d'attente
  msg.textContent = "⏳ Envoi en cours...";
  msg.style.color = "white";

  // Appel AJAX vers newsletter.php
  fetch("newsletter.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: "email=" + encodeURIComponent(email) + "&consent=on"
  })
    .then(response => response.json())
    .then(data => {
      msg.textContent = data.message;
      msg.style.color = (data.status === "success") ? "lightgreen" : "red";

      // Reset du formulaire si succès
      if (data.status === "success") {
        form.reset();
      }
    })
    .catch(() => {
      msg.textContent = "❌ Erreur serveur. Réessaye plus tard.";
      msg.style.color = "red";
    });
});

