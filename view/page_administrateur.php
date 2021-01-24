<?php
// Appel des fonctions PHP
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/add_cgu-cgl.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/fn_session.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/config.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/add_gestionnaire.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/afficher.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/add_faq.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/recherche.php');
//require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/add_cgu-cgl.php');
//session_start();



//Début de la session
//if(!isset($_SESSION["id"])||$_SESSION['type']!=3){
//  header("Location:page_connexion.php");
?>

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
<!--BARRE DE SEPARATION AVEC LE BACK-OFFICE-->
<hr width="100%"size="3" color=#EFD200 solid>
<br>

<!-- BACK OFFICE-->

<!-- FORMULAIRE "AJOUTER UN GESTIONNAIRE"-->
<div id="Backoffice">
  <br> <br>


  <h2> BACK OFFICE</h2>
  <br> <br>
  <form id="form" method="POST"action="page_administrateur.php">
    <div id="ajouterutilisateur">
    <fieldset>
      <legend><strong>AJOUTER UN GESTIONNAIRE</strong></legend>
      <br>

<!--AFFICHAGE DE L'UTILISATEUR AJOUTÉ-->

      <h3><?php
      if ($test=1 &&empty(!$PrenomG)&&empty(!$NomG))
        {
          echo 'Felicitations vous avez ajouté "'.$PrenomG.' '.$NomG.'" en tant que Gestionnaire !';
        }
      ?></h3>

      <br><br>
      <label id="NomG" for="NomG"><strong><U>Nom</U></strong></label>
      <br>
      <br>
      <br>
      <input name="NomG"type="text" placeholder="Dupond" pattern="[A-Za-z-].{1,}">
      <br> <br>
      <label id="PrenomG"for='PrenomG'><strong><U>Prénom</U></strong></label>
      <br>
      <input name="PrenomG"type="text" placeholder="Jean"pattern="[A-Za-z-].{1,}">
      <br> <br>
      <label id="MailG"for="MailG"><strong><U> Adresse mail</U></strong></label>
      <br>
      <input type="text"name="MailG" placeholder="Mail"pattern="[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}">
      <br> <br>
      <button onclick="alert('Es-tu sûr de vouloir ajouter ce gestionnaire ?')"type="submit"name="submit"><span>Ajouter l'utilisateur</span></button>
    </fieldset>

    </div>
  </form> <?php fonction_add_gestionnaire();?>
  <br> <br>
  </div>

  <!-- FORMULAIRE " PROCHAINS RDV"-->
  <div id="prochainsrdv">
    <fieldset>
    <legend><strong>PROCHAINS RDV</strong></legend>
    <br>

            <form action="page_administrateur.php" method="POST" >

          <select name="ok">
            <option><?php id__gestionnaire_rdv();?></option>
          </select>
          <br>
          <input type="submit" value="valider" name="submit">
          <table>
            <tr>
              <td><strong><U>id_User</U></strong></td>
              <td><strong><U>Date</U></strong></td>
              <td><strong><U>Horaire</U></strong></td>
            </tr>
            <tr>
              <td><?php id_prochainrdv_admin();?></td>
              <td><?php Date_prochainrdv_admin();?></td>
              <td><?php horaire_prochainrdv_admin();?></td>
            </tr>
          </table>
        </form>
    </fieldset>
    </div>


  <!-- FORMULAIRE "RESULTATS"-->
  <div id="résultats">
    <fieldset>
      <legend><strong>RESULTATS</strong></legend>
      <br>
      <form>
      <label><strong><U>Rechercher</U></strong></label>
      <br>
      <input type="text" name="">
      <br> <br>

      <button><span>Afficher</span></button>
    </form>
    </fieldset>
  </div>
  <br><br><br>

<!-- RECHERCHER-->
<fieldset>
  <legend><strong><U>RECHERCHER ADMIN-GESTIONNAIRE-UTILISATEUR</U></strong></legend>
  <form method="GET">
    <br><br>
     <input type="search" name="q" placeholder="Recherche..." />
     <br><br>
     <input type="submit" value="Rechercher" />
     <br><br>
     <table>
        <tr>
          <td><strong><U>id_user</U></strong></td>
          <td><strong><U>Nom</U></strong></td>
          <td><strong><U>Prenom</U></strong></td>
          <td><strong><U>Date de naissance</U></strong></td>
          <td><strong><U>Sexe</U></strong></td>
          <td><strong><U>Mail</U></strong></td>

        </tr>
        <tr>
          <td><?php recherche_id();?></td>
          <td><?php recherche_nom()?></td>
          <td><?php recherche_prenom();?></td>
          <td><?php recherche_date_de_naissance();?></td>
          <td><?php recherche_sexe();?></td>
          <td><?php recherche_mail();?></td>
        </tr>
      </table>
  </form>
</fieldset>
<br><br>


  <!-- FORMULAIRE "AJOUTER UNE FAQ"-->
<div id="Backoffice">
  <br> <br>
  <br> <br>
  <form id="form" method="POST"action="page_administrateur.php">
    <div id="ajouterfaq">
    <fieldset>
      <legend><strong>AJOUTER UNE FAQ</strong></legend>
      <br>

<!--AFFICHAGE DE LA FAQ AJOUTÉ-->
      <h3></h3>
      <br><br>
      <label id="Question" for="Question"><strong><U>Question</U></strong></label>
      <br>
      <br>
      <input name="Question"type="text" placeholder="Question" pattern="[A-Za-z-].{1,}">
      <br> <br>
      <label id="Reponse"for="Reponse"><strong><U>Reponse</U></strong></label>
      <br>
      <input name="Reponse"type="text" placeholder="Reponse"pattern="[A-Za-z-].{1,}">
      <br> <br>
      <br> <br>
      <br> <br>
      <button onclick="alert('Es-tu sûr de vouloir ajouter cette FAQ ?')"type="submit"name="submit"><span>Ajouter la FAQ</span></button>
    </fieldset>
    </div>
  </form>
  <br> <br>
  </div>

  <!--FORMULAIRE "AJOUTER UNE CL/CGU"-->
  <div id="clcgu">
    <form class="" action="page_administrateur.php" method="post">
      <fieldset>
        <legend><strong>AJOUTER UNE CL-CGU</strong></legend>
          <br>
          <label><strong><U>Titre CGU/CL:</U></strong></strong></label>
          <br>
          <input name="titre_cgl" type="text" placeholder="Titre CGU/CL">
          <br> <br>
          <label><strong><U>Description CGU/CL:</U></strong> </label>
          <br>
          <input type="text" name="cgl" >
          <br> <br>
          <input type="submit" name="ajout_cgl" value="Ajouter CGL">
      </fieldset>
    </form>
  </div>
  <br> <br>

  <!--FORMULAIRE "CONTACT"-->
  <div id="form">
    <fieldset>
      <legend><strong>FORMULAIRES DE CONTACT</strong></legend>
        <table>
          <tr>
            <td><strong><U>Nom</U></strong></td>
            <td><strong><U>Prénom</U></strong></td>
            <td><strong><U>mail</U></strong></td>
            <td><strong><U>Téléphone</U></strong></td>
            <td><strong><U>Message reçu</U></strong></td>
            <td><strong><U>Message à envoyer</U></strong></td>
            <td><strong><U>Répondre</U></strong></td>
          </tr>
          <tr>
            <td> Dupond</td>
            <td>Jean</td>
            <td>Jean Dupond@gmail.com</td>
            <td> 0606060606</td>
            <td><textarea></textarea></td>
            <td><textarea></textarea></td>
            <td><button onclick="test();"><span>Envoyer</span></button></td>
          </tr>
        </table>
    </fieldset>
  </div>
  <br>
</div>
</body>

<!--APPEL DU DOCUMENT JAVASCRIPT-->
<script src="/SITE/public/js/regexp.js"></script>
<script src="/SITE/public/js/popup.js"></script>
<script src="/SITE/public/js/teststyle.js"></script>

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
</html>
</body>
</html>
