<?php
include "../parts/top.html";
session_start();
if(isset($_SESSION['login'])){
    $login = $_SESSION['login'];
    echo "<h1>Bonjour ".$login."</h1>";
    echo "<p><a href='./actions/deconnect_action.php'>Déconnexion</a></p>";

} else {
    header("location: connexion.php?error=not_connected");
    exit;
}

include "../parts/bottom.html";

?>