<?php
session_start();

$_SESSION= array();
unset($_SESSION);
session_destroy();






$title = "Déconnexion";
include("header.php");

?>

<div>
    <p>Vous etes bien déconnecté.</p>
    <p>A bientot sur Gamos</p>
</div>


<?php
include("footer.php");