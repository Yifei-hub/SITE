<?php

function est_co (){
  if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
    return true;
  }
  else{
    return false;
  }
}
function type_u(){
  if (isset($_SESSION['type'])){
    return $_SESSION['type'];
  }
  else{return 4;}
}


function header_ada(){
$type=type_u();
if(!est_co()){
  echo '<li id="link">
          <a id="b2"href="page_connexion.php">
          <i class="far fa-id-badge"></i> Connexion</a>
        </li>';

}else{
  if($type==1){
    echo '<li id="link"><a id="b2"href="#"> Ma Page</a><br><br>
              <ul>
                  <li><a href="page_utilisateur.php"> Ma Page Utilisateur</li></a>
                  <li><a href="/SITE/controller/logout.php">Déconnexion</li></a>
              </ul>
            </li';
        }
  if($type==2){
    echo '<li id="link"><a id="b2"href="#"> Ma Page</a><br><br>
             <ul>
                <li><a href="page_gestionnaire.php"> Ma Page Gestionnaire</li></a>
                <li><a href="/SITE/controller/logout.php">Déconnexion</li></a>
             </ul>
          </li>';
        }
  if ($type==3){
    echo '<li id="link"><a id="b2"href="#"> Ma Page</a><br><br>
             <ul>
               <li><a href="page_administrateur.php"> Ma Page Administrateur</li></a>
               <li><a href="/SITE/controller/logout.php">Déconnexion</li></a>
             </ul>
          </li>';
          }
}}
function Valid_ajout_gest(){
  $Nom_Prenom_gest=$_SESSION["Nom_Prenom_gest"];
  if (!empty($Nom_Prenom_gest)){
      echo 'Felicitations vous avez ajouté "'.$_SESSION["Nom_Prenom_gest"].'" en tant que Gestionnaire !';
    }
}

function random_password(){
  $lenght=8;
  $carac = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $caraclen = strlen($carac);
  $rdpassword = "";
  for ($i=0, $i<$lenght;$i++  ){
    $rdpassword .= $carac[random_int(0, $caraclen - 1)];
  }
  return $rdpassword;
}
?>
