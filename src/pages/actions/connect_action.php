<?php 
if (isset($_POST['login'] ) && isset($_POST['mdp'])) {
    $login = $_POST["login"];
    $password = $_POST["mdp"];
    if ($login = 'adminweb' && $password = 'adminweb'){
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        header('Location: ../adminweb.php');
        exit;
    }
    if ($login = 'adminsys' && $password = 'adminsys'){
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        header('Location: ../adminsys.php');
        exit;
    }
    
    //if login dans la bdd avec bon mdp A FAIRE

        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        header('Location: ../user.php');
        exit;

}else {
    header('Location: ../connexion.php?error=no_input');
    exit;
}

?>