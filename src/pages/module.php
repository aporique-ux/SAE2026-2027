<?php include "../parts/top.html";  ?>


    <main>
        <section>
            <article>
                <h2>Le code du coffre</h2>
                <p>Un coffre s'ouvre avec un code à trois chiffres. Les chiffres sont tous différents, leur somme vaut 6 et le premier est le plus grand. Quel est le code ?</p>
                <form action="resultat.php" method="get">
                    <label for="reponse">Votre réponse</label>
                    <input id="reponse" name="reponse" type="text" required>
                    <button type="submit">Valider la réponse</button>
                </form>
            </article>
        </section>
    </main>

<?php include "../parts/bottom.html";  ?>