<?php
if(isset($_POST['nom'], $_POST['mdp1'],$_POST['mdp2'],$_POST['email'])){

    if($_POST['mdp1'] != $_POST['mdp2']){
        header('Location: ../inscription.php?error=different_mdp');
        exit;
    }

    if(estComplexe($_POST['mdp1']) == 0){
        header('Location: ../inscription.php?error=weak_psw');
        exit;
    }

    $password = md5($_POST['mdp1']);
    $login = $_POST['nom'];
    
    try {  
        $connexion=mysqli_connect("localhost","admin","SAE26");
        $base = "SAE";
        $table = "utilisateurs";
        $db = mysqli_select_db($connexion,$base);

        $mysqli = new mysqli('localhost','admin','SAE26',$base);

        $stmt= $mysqli->prepare("SELECT * FROM $table WHERE nom = ? or mail = ?;");
        $stmt->bind_param('ss', $login, $_POST['email']);
        $stmt->execute();
        $result = $stmt->get_result();

        $nom = $result->fetch_assoc();
        if ($nom['nom'] ==  $login){
            header('Location: ../inscription.php?error=already_used');
            exit;
        } else {
            $stmt = $mysqli->prepare("INSERT INTO `utilisateurs` (`nom`, `password`,`mail`) VALUES (?, ?, ?)");
            $stmt->bind_param('sss', $login,$password,$_POST['email']);
            $stmt->execute();
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            header('Location: ../user.php');
            exit;
            }
    } catch (mysqli_sql_exception $erreur) { 
        header('Location: ../inscription.php?error=bdd'); 
        exit; 
    }  

}else{
    header('Location: ../inscription.php?error=no_input');
    exit;
}


function estComplexe($password) {
    // Vérifie : minuscule, majuscule, chiffre, caractère spécial, longueur >= 8
    $pattern = '/^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[#?!@$%^&*-]).{8,}$/';
    return preg_match($pattern, $password) === 1;
}

?>
