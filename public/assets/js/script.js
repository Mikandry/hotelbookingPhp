// Assurez-vous que vous avez un bouton pour ouvrir/fermer la barre latérale
const sidebar = document.getElementById("sidebar");
const mainContent = document.querySelector(".main-content");
const toggleButton = document.getElementById("toggleButton"); // Bouton pour ouvrir/fermer la sidebar

toggleButton.addEventListener("click", function () {
	// Ajout ou suppression de la classe 'open' sur la barre latérale
	sidebar.classList.toggle("open");

	// Si la barre latérale est ouverte, déplacez le contenu principal
	if (sidebar.classList.contains("open")) {
		mainContent.style.marginLeft = "250px"; // Déplace le contenu principal à droite de 250px
		toggleButton.textContent = "Fermer"; // Changer le texte du bouton
	} else {
		mainContent.style.marginLeft = "0"; // Rétablir la position normale du contenu principal
		toggleButton.textContent = "Ouvrir"; // Changer le texte du bouton
	}
});
