<?php include "../parts/top.php";  ?>

    <main>
        <section>
            <article>
                <h2>Créer un compte</h2>
                <form action="./actions/inscription_action.php" method="post">
                    <label for="nom">Identifiant</label>
                    <input id="nom" name="nom" type="text" required>

                    <label for="email">Adresse e-mail</label>
                    <input id="email" name="email" type="email" required>

                    <label for="mdp1">Mot de passe</label>
                    <input id="mdp1" name="mdp1" type="password" required>

                    <label for="mdp2">Confirmer le mot de passe</label>
                    <input id="mdp2" name="mdp2" type="password" required>

                    <button type="submit">Créer mon compte</button>
                </form>
                <p>Déjà inscrit ? <a href="connexion.php">Se connecter</a></p>
            </article>
        </section>

        <?php
        if (isset($_GET['error'])) {
            $erreur = $_GET['error'];
            if ($erreur == 'no_input') {
                $message = "Veuillez remplir tous les champs.";
            } elseif ($erreur == 'different_mdp') {
                $message = "Les deux mots de passe sont différents.";
            } elseif ($erreur == 'taken_login') {
                $message = "Cet identifiant est déjà pris.";
            } elseif ($erreur == 'bdd') {
                $message = "Problème technique, veuillez réessayer plus tard.";
            } elseif ($erreur == 'not_email') {
                $message = "L'identifiant n'est pas une adresse mail"
            } elseif ($erreur == 'weak_psw'){
                $message = "Mot de passe trop faible, le mdp doit contenir au moin une lettre maj, une lettre min, un chiffre, un charactére spécial et doit faire à minimat 8 charactéres.";
            }else {
                $message = "Une erreur est survenue.";
            }
            echo "<div class='error'><p>" . $message . "</p></div>";
        }
        ?>
    </main>

<?php include "../parts/bottom.html";  ?>
