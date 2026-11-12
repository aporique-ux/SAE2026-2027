<?php
if(isset($_POST['nom'], $_POST['mdp1'],$_POST['mdp2'])){
    if($_POST['mdp1'] != $_POST['mdp2']){
        header('Location: ../inscription.php?error=different_mdp');
        exit;
    }

    $password = md5($_POST['mdp1']);
    $login = $_POST['nom'];
    $connexion=mysqli_connect("localhost","admin","SAE26");
    $base = "SAE";
    $table = "utilisateurs";
    $db = mysqli_select_db($connexion,$base);

    $mysqli = new mysqli('localhost','admin','SAE26',$base);

    $stmt= $mysqli->prepare("SELECT * FROM $table WHERE nom = ?;");
    $stmt->bind_param('s', $login);
    $stmt->execute();
    $result = $stmt->get_result();

    $nom = $result->fetch_assoc();
    if ($nom['nom'] ==  $login){
        header('Location: ../inscription.php?error=taken_login');
        exit;
    } else {
        $stmt = $mysqli->prepare("INSERT INTO `utilisateurs` (`nom`, `password`) VALUES (?, ?)");
        $stmt->bind_param('ss', $login,$password);
        $stmt->execute();
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        header('Location: ../user.php');
        exit;
        }

}else{
    header('Location: ../inscription.php?error=no_input');
    exit;
}

?>
