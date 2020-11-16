<?php

define("SERVEUR","localhost");
define("USER","user");
define("MDP","user");
define("BD","ProjetWebSite");


function connexionBd($hote=SERVEUR,$username=USER,$mdp=MDP,$bd=BD)
{
    try
    {
        $connex= new PDO('mysql:host='.$hote.';dbname='.$bd, $username, $mdp);
        $connex->exec("SET CHARACTER SET utf8");	//Gestion des accents


    }
    catch(Exception $e)
    {
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
        $connex = null;
    }

    return $connex;
}

?>
