// Charger les polices Google
const loadFont = (fontName, fontUrl) => {
    // Créer un objet FontFaceObserver
    const fontFaceObserver = new FontFaceObserver(fontName);

    // Ajouter un écouteur d'événements
    fontFaceObserver.load().then(() => {
        // La police est chargée
        // Vous pouvez ajouter du code ici pour réagir lorsque la police est chargée
    });

    // Charger la police
    const fontLink = document.createElement('link');
    fontLink.href = fontUrl;
    fontLink.rel = 'stylesheet';
    document.head.appendChild(fontLink);
};

// Charger la police Google Roboto
loadFont('Roboto', 'https://fonts.googleapis.com/css?family=Roboto');

// Créer un élément <div> pour le texte
const text = document.createElement("div");
text.textContent = "Un peu de patience...";

// Créer un élément de style CSS pour styliser le texte
const style = document.createElement("style");
style.textContent = `
    animation: text-move 2s infinite;
    transform: translateY(-10px) translateX(-10px) rotate(30deg);
`;

// Ajouter le style au texte
text.style = style;

// Ajouter le texte à la page
document.body.appendChild(text);

// Définir l'animation
function textMove() {
    text.style.transform = `
        translateY(-10px) translateX(-10px) rotate(30deg);
    `;
    setTimeout(textMove, 200); // Augmentez le délai pour une animation plus fluide
}

// Exécuter l'animation
textMove();

window.addEventListener("scroll", () => {
    let scrollY = window.scrollY;
    let paragraphes = document.querySelectorAll(".paragraph");

    for (let i = 0; i < paragraphes.length; i++) {
        let paragraphe = paragraphes[i];

        if (scrollY > paragraphe.offsetTop) {
            paragraphe.style.visibility = "visible";
        }
    }
});
