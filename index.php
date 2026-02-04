<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (icônes) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

      <!-- Ton CSS perso -->
   <link rel="stylesheet" href="css/style.css?v=3">


	
</head>
<body>

     <!-- header -->
    <header  >
        <nav class="navbar navbar-expand-md fixed-top">
            <!-- Logo -->
				<a class="navbar-brand" href="ressources/mon_cv.pdf" target="_blank" >	
				 DIALLO Fatimatou
				</a>
                    
           <!-- Bouton pour mobile (visible uniquement en dessous de md) -->
				<button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="#menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav">

                    <li class="nav-item"> 
                        <a class="nav-link active partieGauche " aria-current="page" href="#"> Accueil</a>
                    </li>

                    <li class="nav-item"> 
                        <a class="nav-link   " href="#Apropos"> A propos </a>
                    </li>

                    <li class="nav-item"> 
                        <a class="nav-link " href="#mon_parcours">Parcours </a>
                    </li>

                    <li class="nav-item"> 
                        <a class="nav-link " href="#mes_projets"> Mes projets</a>
                    </li>

                    
                    <li class="nav-item"> 
                        <a class="nav-link " href="#competances"> Compétences</a>
                    </li>

                    
                    <li class="nav-item"> 
                        <a class="nav-link " href="#contact"> Contact</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <!--Main-->
    <main>

                <div class="container"> 
                <div class="row align-items-center">

                    <!-- Texte -->
                    <div class="col-lg-8 order-2 order-lg-1" id="gauche">
                    <h4>DIALLO Fatimatou</h4>
                    <p class="bloc1">
                        Étudiante en 3ᵉ année de Licence Informatique,
                        je suis passionnée par les nouvelles technologies et plus particulièrement par 
                        l’intelligence artificielle, un domaine en pleine évolution qui façonne déjà le monde de demain.
                        <br>
                        À travers ce portfolio, je vous invite à découvrir mon parcours, mes projets et 
                        mes ambitions dans le domaine du numérique. 🚀
                    </p>

                    <a href="ressources/mon_cv.pdf" target="_blank" class="btn btn-color">Télécharger mon CV</a>
                    <p class="citation">Créer, c'est exister deux fois</p>
                    <a href="#mes_projets" class="btn btn-color">Voir mes projets</a>
                    </div>

                    <!-- Image -->
                    <div class="col-lg-4 order-1 order-lg-2">
                    <img src="./ressources/image/fatima.png" id="image" alt="une photo de moi">
                    </div>

                </div>
                </div>


        <section id="Apropos" class="my-5">
                <!---Apropos-->
            <div class="container my-5">
                <h2 class="text-center mb-4">A propos</h2>
                </div>

                <div class="container">
                    <div class="row ">
                            
                        <div class="col-lg-4 " >
                            <img src="./ressources/image/fatima2.jpg" id="image2" alt="une photo de moi">
                        </div>
                        
                        <div class="col-lg-8 " id="gauche2">
                        <p class="bloc1">
                            Étudiante en troisième année de Licence Informatique et actuellement en programme Erasmus, je considère le numérique comme un levier de création, de communication et de transformation. Formée en programmation, systèmes et réseaux, avec une initiation à l’intelligence artificielle, je m’intéresse particulièrement à la conception de solutions innovantes à fort impact humain.<br>

                            Sur le plan professionnel, j’ai exercé en tant que tutrice et chargée d’accueil des étudiants internationaux et néo-entrants à l’Université de Limoges, ainsi qu’agente d’accueil et de ménage au CROUS de Limoges. Ces expériences m’ont permis de développer des compétences en accompagnement, organisation et service.<br>

                            Parallèlement, je suis engagée dans le milieu associatif : je suis chargée de communication à l’Association des Étudiants Guinéens de Limoges (AEGL) et bénévole à COP1 Limoges. Ces activités m’ont permis de renforcer mes capacités en gestion de projets et communication.<br>

                            Enfin, je suis associée-gérante de Daldigit360, un cabinet dédié à l’accompagnement numérique et à la transformation digitale des PME guinéennes.<br>

                            Mon objectif est de contribuer à des projets innovants en mettant la technologie au service de l’humain et en apportant une valeur concrète à chaque initiative.
                        </p>



                            <div class="text-center">
                            <a href="#mes_projets" class="btn btn-color">voir mes projets</a>
                        </div>
                        </div>
                    

                    </div>


                </div>
            </section>
                
            <!--Parcours-->    

        <section id="mon_parcours">

            <div class="container">
                <h2 class="text-center mb-4">Parcours</h2>
            </div>

                <div id="parcoursCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                    <div class="carousel-inner">

                    <!-- Slide 1 : l3+l2 -->
                    <div class="carousel-item active">
                        <div class="row ">
                        <div class="col-md-6">
                            <div class="parcours">
                            <h2>Licence 3 Informatique</h2>
                            <h3>Université de Limoges (2025 - 2026)</h3>
                            <ul>
                                <li>Compilation </li>
                                <li>Analyse et POO - C++</li>
                                <li>Grammaire et langage </li>
                                <li>Programmation concurrente  </li>
                                <li>Algorithmique et Complexité </li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="parcours">
                            <h2>Licence 2 Informatique</h2>
                            <h3>Université de Limoges (2024 - 2025)</h3>
                            <ul>                                
                                <li>Logique </li>
                                <li>Langage C avancées</li>
                                <li>Projet Informatique</li>
                                <li>programmation orienté objet (Java) </li>
                                <li>Développement des competances en web</li>
                           
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>

                    <!-- Slide 2 : L1 et l2 gamal -->
                    <div class="carousel-item">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="parcours">
                            <h2>Licence 2 Genie Informatique</h2>
                            <h3>Université Gamal Abdel Nasser de conakry (2023- 2024)</h3>
                            <ul>
                                <li>Bases de données</li>
                                <li>Maitrisse de wordpress</li>
                                <li>Maitenance des ordinateurs</li>
                               <li>Programmation orienté object c++</li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="parcours">
                        <h2>Licence 1 Genie Informatique</h2>
                            <h3>Université Gamal Abdel Nasser de conakry (2023- 2024)</h3>
                            <ul>
                                <li>Anglais général</li>
                                <li>Structure des données</li>
                                <li>Circuits Eletroniques</li>
                                <li>Mathematique pour l'Informatique</li>

                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>

                    </div>

                    <!-- Contrôleurs -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#parcoursCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#parcoursCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                    </button>

                </div>
                </div>
        </section>

    
<!-- Mes Projets -->
<section id="mes_projets" class="my-5">
    <div class="container">
        <h3 class="text-center mb-4">
            Quelques projets académiques et personnels réalisés durant ma licence
        </h3>

        <div class="row g-4 projets-container">
             <!-- Projet 1 -->
            <div class="col-md-6">
                <div class="card p-3 h-100 projets">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5><i class="fa-solid fa-code"></i> Analyseur Syntaxique LL(1) – Mini-langage C</h5>
                        <span>2025-26</span>
                    </div>
                    <a href="https://github.com/Fatimatou-DIALLO-87/Analyseur_syntaxiqye" target="_blank" class="btn btn-github mb-2">GitHub</a>
                    <ul>
                        <li>Développement d’un analyseur syntaxique descendant prédictif LL(1) en Python</li>
                        <li>Implémentation des ensembles PREMIER et SUIVANT pour construire la table d’analyse</li>
                        <li>Analyse pas à pas du code source et détection des erreurs syntaxiques</li>
                        <li>Construction et visualisation interactive de l’arbre syntaxique avec Tkinter</li>
                        <li>Gestion de l’affichage : zoom, navigation et règles appliquées</li>
                        <li>Respect de la grammaire définie et validée pour un mini-langage inspiré du C</li>
                    </ul>
                </div>
            </div>


           <!-- Projet 3 -->
            <div class="col-md-6">
                <div class="card p-3 h-100 projets">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5><i class="fa-solid fa-school"></i> Gestion de Scolarité</h5>
                        <span>2025-26</span>
                    </div>
                    <a href="https://github.com/Fatimatou-DIALLO-87/Analyse_et_gestion_fst" target="_blank" class="btn btn-github mb-2">GitHub</a>
                    <ul>
                        <li>Développement d’un logiciel C++ pour gérer les diplômes, semestres et unités d’enseignement (UE)</li>
                        <li>Gestion intelligente des enseignants avec héritage et polymorphisme (EnseignantChercheur, AutreEnseignant)</li>
                        <li>Calcul automatique des heures ETD, charges horaires et coûts des diplômes</li>
                        <li>Système de persistance des données via fichiers avec sérialisation/désérialisation</li>
                        <li>Interface console améliorée avec couleurs pour IDs, libellés et erreurs</li>
                    </ul>
                </div>
            </div>



            <!-- Projet 3 -->
            <div class="col-md-6">
                <div class="card p-3 h-100 projets">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5><i class="fa-solid fa-tree"></i> GeneLog - Généalogie Familiale</h5>
                        <span>2024-25</span>
                    </div>
                    <a href="https://github.com/Fatimatou-DIALLO-87/Genelog" target="_blank" class="btn btn-github mb-2">GitHub</a>
                    <ul>
                        <li>Développement d’un logiciel de gestion de généalogie familiale en Python</li>
                        <li>Création et gestion des individus, familles et relations (parent, enfant, conjoint)</li>
                        <li>Interface graphique intuitive avec Tkinter pour visualiser l’arbre familial</li>
                        <li>Sauvegarde des données dans une base SQLite locale</li>
                        <li>Respect des contraintes logiques : cohérence des dates, âge minimum pour mariage, unicité des identifiants</li>
                        <li>Rédaction d’un rapport technique complet et structuré du projet</li>
                    </ul>
                </div>
            </div>


            <!-- Projet 2 -->
            <div class="col-md-6">
                <div class="card p-3 h-100 projets">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5><i class="fa-solid fa-image"></i> Snaptag</h5>
                        <span>2024-25</span>
                    </div>
                    <a href="https://github.com/Fatimatou-DIALLO-87/SnapTag" target="_blank" class="btn btn-github mb-2">GitHub</a>
                    <ul>
                        <li>Développement d’une application Java pour ajouter des tags aux images et sauvegarder les métadonnées</li>
                        <li>Conception d’une interface ergonomique avec JavaFX pour la gestion des images</li>
                        <li>Application de filtres et de transformations (rotation, symétrie, effets visuels…)</li>
                        <li>Rédaction d’un rapport détaillé documentant l’architecture orientée objet</li>
                    </ul>
                </div>
            </div>

            <!-- Projet 5 (masqué) -->
            <div class="col-md-6 hidden-project">
                <div class="card p-3 h-100 projets">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5><i class="fa-solid fa-gamepad"></i> Space Invaders</h5>
                        <span>2024-25</span>
                    </div>
                   <a href="https://github.com/Fatimatou-DIALLO-87/SpaceInvaders" target="_blank" class="btn btn-github mb-2">GitHub</a>
                    <ul>
                        <li>Réalisation d’un jeu vidéo en Processing inspiré du classique “Space Invaders”</li>
                        <li>Implémentation des mécaniques de tir, de mouvement et de collision</li>
                        <li>Intégration d’effets visuels pour améliorer l’expérience de jeu</li>
                        <li>Conception d’une interface simple et intuitive pour le joueur</li>
                        <li>Rédaction d’un rapport technique décrivant le fonctionnement du jeu</li>
                    </ul>
                </div>
            </div>

            <!-- Projet 6 (masqué) -->
            <div class="col-md-6 hidden-project">
                <div class="card p-3 h-100 projets">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5><i class="fa-brands fa-spotify"></i> Spotify</h5>
                        <span>2024-25</span>
                    </div>
                    <a href="https://github.com/Fatimatou-DIALLO-87/Sportify" target="_blank" class="btn btn-github mb-2">GitHub</a>
                    <ul>
                        <li>Création d’un espace utilisateur permettant la connexion et l’affichage dynamique du nom de l’utilisateur</li>
                        <li>Développement de l’interface en HTML, CSS et JavaScript avec intégration PHP</li>
                        <li>Mise en place d’un système de redirection et gestion de session pour sécuriser l’accès</li>
                        <li>Ajout de fonctionnalités interactives pour améliorer l’expérience utilisateur</li>
                    </ul>
                </div>
            </div>

        </div> <!-- /row -->

        <div class="text-center mt-3">
            <button id="voirPlusProjets" class="btn btn-color">Voir plus</button>
        </div>
    </div> <!-- /container -->
</section>

<!-- Compétences -->
<section id="competances" class="my-5">
  <div class="container">
    <h2 class="text-center mb-5">Compétences</h2>

    <div class="row g-4">

      <!-- Bloc 1 : Développement & Programmation -->
      <div class="col-md-6">
        <h4>Développement & Programmation</h4>

        <div class="skill-container">
          <span class="skill-name">HTML & CSS — 95%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:95%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">JavaScript — 90%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:90%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Java — 85%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:85%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Python — 80%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:80%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">PHP — 75%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:75%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">SQL / MySQL — 70%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:70%;"></div></div>
        </div>

      </div>

      <!-- Bloc 2 : Front-end / UI & Outils -->
      <div class="col-md-6">
        <h4>Front-end / UI & Outils</h4>

        <div class="skill-container">
          <span class="skill-name">JavaFX — 80%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:80%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Bootstrap — 55%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:55%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Responsive Design — 70%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:70%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Figma / UI Design — 55%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:55%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">WordPress — 70%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:70%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Canva — 85%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:85%;"></div></div>
        </div>

      </div>

      <!-- Bloc 3 : Bases de données & Back-end -->
      <div class="col-md-6">
        <h4>Bases de données & Back-end</h4>

        <div class="skill-container">
          <span class="skill-name">MySQL / Derby — 85%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:85%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">PHP / API — 70%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:70%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Gestion serveur — 75%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:75%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Sécurité & persistance — 60%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:60%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Gestion de projets — 65%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:65%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Automatisation / Scripts — 50%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:50%;"></div></div>
        </div>

      </div>

      <!-- Bloc 4 : Soft Skills -->
      <div class="col-md-6">
        <h4>Soft Skills</h4>

        <div class="skill-container">
          <span class="skill-name">Travail d’équipe — 85%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:85%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Adaptabilité — 60%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:60%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Gestion du temps — 75%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:75%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Créativité — 60%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:60%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Communication — 85%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:85%;"></div></div>
        </div>
        <div class="skill-container">
          <span class="skill-name">Résolution de problèmes — 70%</span>
          <div class="skill-bar"><div class="skill-fill" style="--width:70%;"></div></div>
        </div>

      </div>

    </div>
  </div>
</section>

        <!--contact-->

        <section id="contact" class="my-5">
            <div class="container my-5">
            <h2 class="text-center mb-4">Contact</h2>
            </div>
                <div class="container">
                    <div class="row ">

                        <div class="col-md-6 contact-info">
                            <div>
                                <h5 class="mb-3">Mes coordonnées</h5>

                                <div class="info-item">
                                    <img src="./ressources/logo/telephone.png" class="icon" alt="">
                                    <span>07 48 22 83 77</span>
                                </div>

                                <div class="info-item">
                                    <img src="./ressources/logo/mail.png" class="icon" alt="">
                                    <span>fatimatoudaka@gmail.com</span>
                                </div>

                                <div class="info-item">
                                    <img src="./ressources/logo/github.png" class="icon" alt="">
                                    <a href="https://github.com/fatima-d-hub/Fatimatou-DIALLO-87" target="_blank">
                                        https://github.com/fatima-d-hub
                                    </a>
                                </div>
                                <div class="info-item">
                                    <img src="./ressources/logo/linkedIN.png" class="icon"  id="icom_IN" alt="">
                                    <a href="https://www.linkedin.com/in/fatimatou-diallo-869974324" target="_blank">
                                    linkedin.com/in/fatimatou-diallo
                                    </a>
                                </div>
                            </div>
                            <div class="citation">
                                <p>"Toujours apprendre, toujours avancer."</p>
                            </div>
                        </div>


                        <div class="col-md-6 contact-info" id="message">
                                
                             <form id="contactForm" novalidate>
                                <div class="mb-3">
                                <label for="n" class="form-label"><b>Nom</b></label>
                                <input type="text" name = "nom" class="form-control" id="n" placeholder="Votre nom" required>
                                </div>
                                <div class="mb-3">                            <label for="p" class="form-label"><b>Prénom</b></label>
                                    <input type="text" name = "prenom" class="form-control" id="p" placeholder="Votre prénom" required>
                                    </div>
                                    <div class="mb-3">
                                    <label for="e" class="form-label"><b>Email</b></label>
                                    <input type="email" name = "email" class="form-control" id="e" placeholder="exemple@mail.com" required>
                                    </div>
                                    <div class="mb-3">
                                    <label for="m" class="form-label"><b>Votre commentaire</b></label>
                                    <textarea class="form-control" name = "message" id="m" rows="4" placeholder="Votre message..." required></textarea>
                                </div>
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                            </form>
                                <!-- Message de confirmation -->
                                <div id="successMessage" style="display: none;" class="alert alert-success mt-2 mb-3">
                                    ✅ Merci ! Votre message a été envoyé!.
                                </div>
                        </div>
                    </div>
                </div>
        


            </section>
    </main>

<footer class="footer">
  <div class="container">
    <div class="row">
      
      <!-- Texte -->
      <div class="col-md-12 text-center text-md-start">
        <p class="text_footer mb-0">
          © 2025 Diallo Fatimatou — Limoges, France
        </p>
      </div>
      
      <!-- Réseaux sociaux -->
      <div class="col-md-12 text-center text-md-center">
        <a href="https://www.linkedin.com/in/fatimatou-diallo-869974324" target="_blank" class="social"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://github.com/fatima-d-hub/Fatimatou-DIALLO-87" target="_blank" class="social"><i class="fa-brands fa-github"></i></a>
      </div>
    </div>
  </div>
</footer>





<!-- Bootstrap Bundle JS  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



<!-- Script principal -->
<script src="js/script.js" defer></script>



</body>
</html>