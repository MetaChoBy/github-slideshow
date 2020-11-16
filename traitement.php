<?php
include ("connexion.php");

$connexion=connexionBd();
// Création de la requete

<?php
print_r($_POST);


if(isset($_POST["send"]) )
{
    if (!empty($_POST["nom"])&& !empty($_POST["prenom"])&& !empty($_POST["age"]))
    {

        $nom=htmlspecialchars($_POST["nom"]);               // strip_tags()
        $prenom=htmlspecialchars($_POST["prenom"]);
        $age=htmlspecialchars($_POST["age"]);
        $email=htmlspecialchars($_POST["mail"]);
	$message=htmlspecialchars($_POST["message"]);
        
        

    }
    else
    {
        echo "<script type=\"text/javascript\">";
        echo "alert('Complétez tous les champs');";
        echo "window.history.back();";
        echo "</script>";
    }
}
else {
    header("location:infos.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Votre profil</title>
        <link rel="stylesheet" type="text/css" href="demo.css" />

    </head>
    <body>

        <h2>bonjour <?=$nom."  ".$prenom ?></h2>
        <p>Votre message a bien été envoyé </p>

       <?php if(isset($_POST["sport"])):?>

    </body>
</html>
