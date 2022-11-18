<?php

//CONNEXION BDD
try {
    $bdd=new PDO("mysql:host=localhost;dbname=meubles","","root", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]);
} catch (\Exception $e) {
    die("ERREUR CONNEXION BDD:".$e->getmessage());
}

//CREATION DE LA FONCTION DEBUG

function debug($value){
    echo"<pre>";
        print_r($value);
    echo "</pre>";
}

//INITIALISATION DES VARIABLES GENERALES

$errorMessage="";
$successMessage="";

