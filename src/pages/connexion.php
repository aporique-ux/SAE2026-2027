<?php include "../parts/top.html";  ?>

    <main>
        <section>
            <article>
                <h2>Connexion</h2>
                <form action="./actions/connect_action.php" method="post">
                    <label for="login">Identifiant</label>
                    <input id="login" name="login" type="text" required>

                    <label for="mdp">Mot de passe</label>
                    <input id="mdp" name="mdp" type="password" required>

                    <button type="submit">Se connecter</button>
                </form>
                <p>Pas encore de compte ? <a href="inscription.php">Créer un compte</a></p>
            </article>
        </section>

        <?php 
        if (isset($_GET['error'])) {   // MODIFIÉ : tout ce bloc
            $erreur = $_GET['error'];
            if ($erreur == 'no_input') {
                $message = "Veuillez remplir l'identifiant et le mot de passe.";
            } elseif ($erreur == 'wrong_identity') {
                $message = "Identifiant ou mot de passe incorrect.";
            } elseif ($erreur == 'not_connected') {
                $message = "Vous devez être connecté pour accéder à cette page.";
            } elseif ($erreur == 'bdd') {
                $message = "Problème technique, veuillez réessayer plus tard.";
            } else {
                $message = "Une erreur est survenue.";
            }
            echo "<div class='error'><p>" . $message . "</p></div>";
        }
        ?> 


    </main>

<?php include "../parts/bottom.html";  ?>
