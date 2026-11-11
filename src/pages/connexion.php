<?php include "../parts/top.html";  ?>

    <main>
        <section>
            <article>
                <h2>Connexion</h2>
                <form action="module.html" method="post">
                    <label for="login">Identifiant</label>
                    <input id="login" name="login" type="text" required>

                    <label for="mdp">Mot de passe</label>
                    <input id="mdp" name="mdp" type="password" required>

                    <button type="submit">Se connecter</button>
                </form>
                <p>Pas encore de compte ? <a href="inscription.html">Créer un compte</a></p>
            </article>
        </section>
    </main>

<?php include "../parts/bottom.html";  ?>