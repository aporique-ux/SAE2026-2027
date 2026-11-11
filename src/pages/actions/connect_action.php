<?php 
if (isset($_POST['login'] ) && isset($_POST['mdp'])) {
    $login = $_POST["login"];
    $password = $_POST["mdp"];
    //if login dans la bdd avec bon mdp A FAIRE

        session_start();
        $_SESSION['login'] = $login
        $_SESSION['password'] = $password
        header('Location: ../user.php')

}else {
    header('Location: ../connexion.php?error=no_input');
    exit;
}

?>