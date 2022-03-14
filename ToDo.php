<?php

/* Objet To do list */
function AddToDoList()
{
        /* La base de données avec la table */
    $Bdd = "mysql:host=localhost;dbname=autosun;charset=utf8";
    $ListeImportante = "Liste_importante";
    $ListeNonUrgente = "Liste_non_importante";
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

    /* Les formulaires */
    $Nom = $_POST['Nom'];
    $DateDeDebut = $_POST['DateDebut'];
    $DateDeFin = $_POST['DateFin'];
    $Tache = $_POST['TextList'];
    $Input = $_POST['Bouton'];
    $Checkbox = [$_POST['Important'], $_POST['MoinsImportant']];

    if ($Checkbox[0])
    {
        $requete = "INSERT INTO $ListeImportante(Nom, DateDeDebut, DateDeFin, Tache) VALUES('$Nom', '$DateDeDebut', '$DateDeFin', '$Tache')";
        return $db->exec($requete);
    }
    elseif ($Checkbox[1])
    {
        $requete = "INSERT INTO $ListeNonUrgente(Nom, DateDeDebut, DateDeFin, Tache) VALUES('$Nom', '$DateDeDebut', '$DateDeFin', '$Tache')";
        return $db->exec($requete);
    }
}

AddToDoList();

?>

<?php include("index.php"); ?>