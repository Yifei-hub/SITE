<?php
// Appel des fonctions PHP
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/fn_session.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/config.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/add_gestionnaire.php');

//Début de la session
session_start();?>

<!--DEBUT HTML-->
<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta charset="utf-8" name="viewport"/>
  <title>Website | Accueil</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/SITE/public/css/Header.css">
  <link rel="stylesheet" href="/SITE/public/css/footer.css">
  <link rel="stylesheet" href="/SITE/public/css/style.css">
  <link rel="stylesheet" href="/SITE/public/css/p_uga.css">

  <!--HEADER-->
  <header id="menu1">
  <nav>
    <ul id="menu">
        <li id="link"><a id="logoapp"href="page_accueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
        <li id="link"><a id="b2" href="page_accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
        <li id="link"><a id="b2"href="page_faq.php"><i class="fas fa-info"></i> Aide</a></li>
        <li id="link"><a id="b2"href="page_contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
        <!-- APPEL DE LA FONCTION DE "fn_session.php" AFIN DE MODIFIER LE HEADER EN FONCTION DE L'UTILISATEUR"-->
        <?php echo header_ada()?>
    </ul>
  </nav>
  </header>

  <body>
    <!-- BOUTONS DE REDIRECTIONS SUR LA PAGE-->
    <a href="#informationspersonnelles"><button ><span>Informations personelles</span></button></a>
    <a href="#prochainsrdv"><button ><span>Prochains RDV</span></button></a>
    <a href="#résultats"><button><span>Résultats</span></button></a>
    <br>
    <br>
    <a href="#Backoffice"><button><span>Back-office</span></button></a>
    <a href="#ajouterutilisateur"><button><span>Ajouter un gestionnaire</span></button></a>
    <a href="#faq"><button><span>Ajouter une FAQ</span></button></a>
    <a href="#clcgu"><button><span>Ajouter une CGL/CGU</span></button></a>
    <a href="#form"><button><span>Formulaires de contact</span></button></a>
    <br><br>

    <!--MESSAGE DE BIENVENUE PERSONNALISE-->
    <p id="bienvenue"><?php echo 'BIENVENUE '.$_SESSION["Mail"].' :)'?><p>
    <br><br>

    <!-- FORMULAIRE INFOS PERSONNELLES-->
    <form id=loginForm">
    <div id="informationspersonnelles">
      <fieldset> 
        <legend><strong>INFORMATIONS PERSONNELLES</strong></legend>
        <br>
        <form>
            <label> <strong><U>Etat :</U></strong> <br>Utilisateur</label>
            <br> <br>
            <label><strong><U>ID :</U></strong></label>
            <br>
            <label> 12345
            <br> <br>
            <label><strong><U>Photo de profil</U></strong></label>             
            <br>
            <img id="photoavatar"src="/SITE/public/images/avatar.png">
            <br> <br>
            <label><strong><U>Sexe</U></strong></label>
            <br>
            <select>
              <option>Homme</option>
              <option>Femme</option>
              <option>Autre</option>
            </select>
            <br> <br>
            <label><strong><U>Nom</U></strong></label>
            <br>      
            <label>DUPOND</label>
            <br> <br>
            <label><strong><U>Prénom</U></strong></label>
            <br>
           <label> Jean</label>
            <br> <br>
        <label><strong><U>Date de Naissance</U></strong></label>
        <br>
        <input type="date" name="">
        <br> <br>
            <label><strong><U>Numéro de téléphone</U></strong></label>
            <br>
            <input type="tel"  placeholder="0606060606"pattern="[0-9]{10}$"value="">
           <br> <br>
            <label><strong><U>Date de Naissance</U></strong></label>
            <br>
            <input type="date" name="">
           <br> <br>
          </form>
        <form action="" method="POST" id="loginForm">
          <!-- Email -->
            <label for="email">Mail</label>
            <br>
            <input type="text" class="form-control" name="email" />
            <small></small>
          <!-- password -->
         <br>
            <label for="password">Mot de passe</label>
            <br>
            <input type="password" class="form-control" name="password" />
            <small></small>
          <br>
            <button type="submit" class="btn btn-secondary btn-block">
              <span>Connexion</span>
              <br>
            </button>
            <br> <br>
        </form>
    </fieldset>
      <br><br><br><br>
      <!--FORMULAIRE "RESULTATS"-->
        <div id="résultats">
          <fieldset>
            <legend><strong>RESULTATS</strong></legend>
              <table>
                <tr>
                  <td><strong><U>Date</U></strong></td>
                  <td><strong><U>Centre</U></strong></td>
                  <td><strong><U>Capteur 1</U></strong></td>
                  <td><strong><U>Capteur 2</U></strong></td>
                </tr>
                <tr>
                  <td><input type="date" name=""></td>
                  <td><label>1</label></td>
                  <td><label>52/100</label></td>
                  <td><label>52/100</label></td>
                </tr>
              </table>
          </fieldset>
        </div>
        <br><br>
      <!--GRAPHIQUE-->
        <div id="Graphique">
          <fieldset>
            <legend><strong>GRAPHIQUE</strong></legend>
            <br>
            <img id="graph"src="/SITE/public/images/Graphique.png">
          </fieldset>
        </div>
        <br>
  </body>

  <!--FOOTER-->
      <footer id="menu2">
          <nav>
              <ul>
                  <li id="link2"><a href="page_cgu.php">CGU & CL</a></li>
                  <li id="link2"><a href="page_contact.php">Contact</a></li>
                  <li id="link2"><a href="page_faq.php">FAQ</a></li>
                  <li id="link2"><a href="page_aboutus.php">À propos</a></li>
              </ul>
          </nav>
      </footer>
  <!--APPEL DU FICHIER JS-->
  <script src="/SITE/public/js/regexp.js"></script>
</html>

