<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="vieuport" content="width-device-width, initial-scale-1.0">
    <title> Auto-école de Meknes </title>
    <link rel="stylesheet" href="style_tarifs.css"/>
</head>
<body>
    <section class="main">
         <nav>
             <a href="#" class="logo">
                  <img  class="logo" src="logo.gif">
             </a>
             <ul class="menu">
                <li><a href="accueil.html">Accueil</a></li>
                <li> <a class="active" href="#">Tarifs</a></li>
                <li><a href="connexion.html">Se connecter</a></li>
            </ul>
           
         </nav> 
         <div clasS="main-heading">
            <h1> Notre site d'Auto-école</h1>
            <p>Vous avez fait le bon choix</p>
         </div>
    </section>
    <section class="condition">
       <h3 style="color: blue;">Condition à l'inscription:</h3>
       <div class="at-text">
          <ul>
             <li>Le condidat doit avoir au minimum 18 ans le jour de l'inscription au permis </li>
             <li>Un mineur de 16 à 18 ans peut passer le permis de conduire marocain sous certaines conditions. Il faut prouver que l’individu en a besoin et la demande doit être faite par son représentant (père par exemple)</li>
             <li>Si vous avez des problèmes de santé, vous devrez vous soumettre à un contrôle médical auprès d’un médecin agréé par le préfet du département de votre lieu de résidence.</li>
          </ul>
       </div>
    </section>
    <section class="piece">
       <h3 style="color: blue;">Pieces à fournire:</h3>
       <div class="at-text">
          <ul>
              <li>Timbre 700 dh</li>
              <li>8 Photos de permis format 35/45mm</li>
              <li>Certificat médical d’aptitude à la conduite</li>
              <li>Copie certifiée (C.I.N)</li>
         </ul>
       </div>
    </section>
    <section class="features">
       <h1>NOS TARIFS</h1>
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-text">
                     <h4>Permis A</h4>
                     <h2>2700DH</h2>
                     <p>Formation au code offerte + 20 cours de conduite</p>
                     <button  class="main-btn" onclick="maFonction()">Check</button>

                    <div id="maDIV" style="display:none;">
                        <ul> 
                            <li> Accompagnement par un moniteur lors de votre 1ère présentation à l'épreuve pratique</li>
                            <li>Contrôle de connaissances théoriques sans enseignant</li>
                            <li>Livre de vérification</li>
                            <li> Livre de Code en ligne</li>
                            <li>Accès plateforme</li>
                            <li>Frais d'inscription</li>
                            <li>Évaluation préalable</li>
                            <li>Frais d'inscription et gestion de dossier</li>
                            <li>Formation au code de la route</li>
                            <li>Suivi de votre formation par un coach</li>
                            <li>5H de formation en ligne à la conduite</li>
                            <li>20 séances de conduite</li>
                        </ul>
                    </div>
                   <script>
                         function maFonction() {
                            var div = document.getElementById("maDIV");
                            if (div.style.display === "none") {
                               div.style.display = "block";
                            } else {
                               div.style.display = "none";
                            }
                       }
                    </script>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-text">
                     <h4>Permis B</h4>
                     <h2>2500DH</h2>
                     <p>Formation au code offerte + 20 cours de conduite en moins de 30 jours + un accompagnement à l'examen</p>
                     <button  class="main-btn" onclick="mFonction()">Check</button>

                    <div id="meDIV" style="display:none;">
                     <ul> 
                          <li> Contrôle de connaissances théoriques sans enseignant</li>
                          <li>Livre de vérification</li>
                          <li> Livre de Code en ligne</li>
                          <li>Accès plateforme</li>
                          <li>Frais d'inscription</li>
                          <li>Évaluation préalable</li>
                          <li>Frais d'inscription et gestion de dossier</li>
                          <li>Formation au code de la route</li>
                          <li>5H de formation en ligne à la conduite</li>
                          <li>20 séances de conduite</li>
                     </ul>
                    
                </div>
                <script>
                         function mFonction() {
                            var div = document.getElementById("meDIV");
                            if (div.style.display === "none") {
                               div.style.display = "block";
                            } else {
                               div.style.display = "none";
                            }
                       }
                    </script>
                
            </div>
         </div>

            <div class="feature-box">
                <div class="f-text">
                     <h4>Permis C</h4>
                     <h2>3500DH</h2>
                     <p>Formation au Code offerte + 30 cours de conduite et un accompagnement à l'examen pour réussir son permis en toute tranquillité</p>
                     <button  class="main-btn" onclick="aFonction()">Check</button>

                      <div id="myDIV" style="display:none;">
                     <ul>
                         <li> Accompagnement par un moniteur lors de votre 1ère présentation à l'épreuve pratique
                              Contrôle de connaissances théoriques sans enseignant</li>
                         <li>Livre de vérification</li>
                         <li> Livre de Code en ligne</li>
                         <li>Accès plateforme</li>
                         <li>Frais d'inscription</li>
                          <li>Évaluation préalable</li>
                         <li>Frais d'inscription et gestion de dossier</li>
                         <li>Formation au code de la route</li>
                         <li>Suivi de votre formation par un coach</li>
                         <li>5H de formation en ligne à la conduite</li>
                         <li>30 séances de conduite</li>
                     </ul>
                     </div>
                   <script>
                         function aFonction() {
                            var div = document.getElementById("myDIV");
                            if (div.style.display === "none") {
                               div.style.display = "block";
                            } else {
                               div.style.display = "none";
                            }
                       }
                    </script>
            </div>

        </div>
    </section>
</body>
<footer>
   <p>Copyright © 2022 Auto ecole de Meknes</p>
</footer>
</html>