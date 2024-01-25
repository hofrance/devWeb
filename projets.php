<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <title>Projets</title>
</head>

<body>
    <?php include 'navigation.php'; ?>

    <div class="container">
        <div class="projects">
            <h2>Mes projets</h2>

            <ul class="projects-list">
                <li class="project">
                    <a href="projet1.php">
                        <img src="./img/projet1.png" alt="Projet 1">
                        <h3>Création d'un site internet informatif</h3>
                        <p>Projet : Site Web pour les personnes âgées et les immigrants</p>
                    </a>
                </li>
                <li class="project">
                    <a href="projet2.php">
                        <img src="./img/projet2.png" alt="Projet 2">
                        <h3>Outil d'analyse de vulnérabilités</h3>
                        <p>Développé en Python, cet outil est muni d'une interface intuitive pour tout public. Il permet de scanner un réseau en fournissant une adresse IP ou divers autres informations. Il utilise des bibliothèques comme Nmap et des algorithmes extrêmement puissants.</p>
                    </a>
                </li>
                <li class="project">
                    <a href="projet3.php">
                        <img src="./img/projet3.png" alt="Projet 3">
                        <h3>Jeu de puissance 4</h3>
                        <p>Un jeu de puissance 4 classique, mais avec une interface moderne et intuitive.</p>
                    </a>
                </li>
            </ul>

            <div class="filters">
                <h2>Filtres</h2>

                <select name="category">
                    <option value="all">Tous</option>
                    <option value="social">Social</option>
                    <option value="education">Éducation</option>
                    <option value="business">Business</option>
                </select>
            </div>

            
                   

               
            </div>
        </div>
    </div>

    <script src="./js/projects.js"></script>

    <?php include 'footer.php'; ?>

