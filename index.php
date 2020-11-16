<?php
include ("connexion.php");

$connexion=connexionBd();
// Création de la requete

$requete = "SELECT * FROM Plats ORDER BY RAND() LIMIT 3";


//Envoi de la requete
$rep=$connexion->query($requete);
$listeArticles=$rep->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="fr">
<body>
<?php require("./header.php");?>



<article class="conten" >
    <h2>Le projet </h2>

    <div class="projet">
        <img src="images/AdobeStock_182810311.jpeg" alt="projet">
        <p>
            Akira Café sera le premier Manga-café sur la rochelle, avec une ouverture prévue pour janvier 2021.<br>
            Tout d'abord nous cherchons à vous proposer un lieu convivial et coloré, autour de la pop culture asiatique.<br>
            Nous serons heureux de vous accueillir et de vous faire gouter nos meilleurs préparations sucrés, inspirés de nos voyages en Asie, tels que : les dorayaki, les mochi Ainsi que des spécialités mieux connues du grand public comme les bubble waffle ou tout simplemnt un café.<br>

            Vous serez aussi en mesure de profiter de nos onigiri, des thés traddiotionel japonais ainsi que de différentes saveurs de bubble tea.!
            <br>Suite au soucis sanitaire, le projet sera reporté(aucune date précise pour le moment).
            Toutefois vous pouvez dès à présent passer commande et profiter de nos délices depuis chez vous.

        </p>
    </div>
</article>


<h2>Spécialités</h2>
<div class="specialites">
    <p> Vous pouvez dès à présent reserver et profités de nos spécialités !</p>

    <ul id="product-list">
        <?php foreach ( $listeArticles as $donnees2 ) : ?>
            <li class="product">
                <h2><?=$donnees2["designation"]?></h2>
                <p> <img src="<?=$donnees2["img_article"]?>" alt="Image du produit"></p>
                <p><?=$donnees2["prix"]?></p>
                <p><?=$donnees2["description"]?></p>
                <a href="Description_plats.php?article=<?=$donnees2["id_article"]; ?>" >Voir les détails </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<main>
</main>
    <?php require "footer.php";?>
</body>
 </html>