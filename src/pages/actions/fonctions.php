
<?php
function connecter($host=NULL,$user=NULL,$password=NULL ){
    if (func_num_args()==0) {
        $connexion = @mysqli_connect();
    }
    else {
        $connexion = @mysqli_connect($host,$user,$password);
    }
    if ($connexion) {
        echo "<p> Connexion réussie</p>";
        echo "<p> Information sur le serveur : <b>".mysqli_get_host_info($connexion)."</b> </p>";
        echo "<p> Version du serveur : <b>".mysqli_get_server_info($connexion)."</b> </p>";
        echo "<p> Jeu de caractère utilisé : <b>".mysqli_character_set_name($connexion)."</b> </p>";
    }
    else {
        echo "<p>Ereur d'ouverture de connexion</p>";
        echo "<p>numéro de l'erreur : </p>".mysqli_connect_errno();
        echo "<p> Message de l'erreur : ".mysqli_connect_error()."</p>";
    }
    return $connexion;
}

function deconnecter($connexion){
    if ($connexion) {
        $ok=@mysqli_close($connexion);
        if ($ok){
            echo "<p> Deconnection réussi </p>";
        }else {
            echo "<p>Erreur de deconnexion </p>";
        }
    }else {
        echo "<p>Pas de connection</p>";
    }
}

?>