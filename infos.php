<?php
include ("connexion.php");

$connexion=connexionBd();
// Création de la requete


?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="fr">
<body>
<?php require("./header.php");?>

	<form action="index.php" method="post">
            <p>Nom <input type="text" name="nom" /></p>
            <p>Prénom <input type="text" name="prenom" /></p>
            <p>email<input type="email" name="email" /></p>
	    <p>message<input type="text" name="text" /></p>
            <p><input type="submit" name="send"/></p>
        </form>


        <?php if (isset($repInsertionForm) && $repInsertionForm>0):?>
        <p>Insertion réussie</p>
        <?php else: ?>
        <p>erreur insertion</p>

        <?php endif; ?>
<main
</main>
<?php require "footer.php";?>
</body>
</html>
