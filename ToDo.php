<?php

/* Objet To do list */
function ToDoList()
{
    /* La base de données avec la table */
    $bdd = ["mysql", "localhost", "autosun", "utf8", "root", "root"];
    $db = new PDO("$bdd[0]:host=$bdd[1];dbname=$bdd[2];charset=$bdd[3], $bdd[4], $bdd[5]");
    $Table = "ToDoList";
    
    /* Les balises HTML */
    $FormNom = $_POST['Nom'];
    /* $FormDate1 = $_POST['Date1']; */
    /* $FormDate2 = $_POST['Date2']; */
    $FormText = $_POST['TextList'];
    $Input = $_POST['Bouton'];

    /* Envoie de saisie */
    return $db->exec("INSERT INTO $Table(Nom, Tache) VALUES ($FormNom, $FormText)");
}

?>