// Initialisation
const projects = document.querySelectorAll(".projects-list li");

// Fonction d'animation
function animate() {
    for (let i = 0; i < projects.length; i++) {
        projects[i].style.left = i * 100 + "%";
    }
}

// Lancement de l'animation
setInterval(animate, 1000);
