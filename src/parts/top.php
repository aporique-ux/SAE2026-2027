<?php
if (session_status() == PHP_SESSION_NONE) {   //démarre la session si elle ne l'est pas déjà
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MasterLag</title>
    <link href="../style/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <h1>MasterLag</h1>
        <h2>Plateforme de jeux et de défis</h2>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="module.php">Défis</a></li>
        </ul>

        <ul>
            <?php
            if (isset($_SESSION['login'])) {
                if ($_SESSION['login'] == 'adminweb') {
                    $page_profil = 'adminweb.php';
                } elseif ($_SESSION['login'] == 'adminsys') {
                    $page_profil = 'adminsys.php';
                } else {
                    $page_profil = 'user.php';
                }
                echo "<li><a href='" . $page_profil . "'>Profil</a></li>";
            } else {
                echo "<li><a href='connexion.php'>Connexion</a></li>";
                echo "<li><a href='inscription.php'>Inscription</a></li>";
            }
            ?>
        </ul>
    </nav>
