<?php include "../parts/top.html";  ?>

    <main>
        <section>
            <article>
                <h2>Créer un compte</h2>
                <form action="connexion.html" method="post">
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
    </main>

<?php include "../parts/bottom.html";  ?>