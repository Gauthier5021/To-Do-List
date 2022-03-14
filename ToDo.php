<?php

/* Objet To do list */
function ToDoList()
{
        /* La base de données avec la table */
    $Bdd = "mysql:host=localhost;dbname=autosun;charset=utf8";
    $User = "root";
    $Password = "root";

    try
    {
        $db = new PDO($Bdd, $User, $Password);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $Nom = $_POST['Nom'];
    $Tache = $_POST['TextList'];

    $requete = "INSERT INTO List(Nom, Tache) VALUES('$Nom', '$Tache')";
    return $db->exec($requete);    
}

ToDoList();

?>

<?php include("index.php"); ?>