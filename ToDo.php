<?php

/* Objet To do list */

use LDAP\Result;

function AddToDoList()
{
        /* La base de données avec la table */
    $Bdd = "mysql:host=localhost;dbname=autosun;charset=utf8";
    $ListeImportante = "Liste_importante";
    $ListeNonUrgente = "Liste_non_importante";
    $User = "root";
    $Password = "root";

    /* La connection à la base de données */
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

    /* Les conditions logique */
    if ($Checkbox[0])
    {
        $requete = "INSERT INTO $ListeImportante(Nom, DateDeDebut, DateDeFin, Tache, Statu) VALUES('$Nom', '$DateDeDebut', '$DateDeFin', '$Tache', 'Important')";
        return $db->exec($requete);
    }
    elseif ($Checkbox[1])
    {
        $requete = "INSERT INTO $ListeNonUrgente(Nom, DateDeDebut, DateDeFin, Tache, MoinsImportant) VALUES('$Nom', '$DateDeDebut', '$DateDeFin', '$Tache', 'Moins Important')";
        return $db->exec($requete);
    }
}

function DelToDoList()
{
    /* La base de données avec la table */
    $Bdd = "mysql:host=localhost;dbname=autosun;charset=utf8";
    $ListeImportante = "Liste_importante";
    $ListeNonUrgente = "Liste_non_importante";
    $User = "root";
    $Password = "root";

    /* La connection à la base de données */
    try
    {
        $db = new PDO($Bdd, $User, $Password);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    /* Les formulaires */
    $InputDel = $_POST['BoutonDel'];

    /* Les conditions logique */
    if ($InputDel)
    {
        $requete = "DELETE FROM $ListeImportante; DELETE FROM $ListeNonUrgente";
        return $db->exec($requete);
    }
}
function Result()
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

    $TacheImportante = "SELECT Nom, DateDeDebut, DateDeFin, Tache, Statu FROM $ListeImportante";
    $TacheMoinsImportante = "SELECT * FROM $ListeNonUrgente";

    $RequeteSql = $db->query($TacheImportante);
    
    while ($Result = $RequeteSql->fetch())
    {
        return $Result['Nom'] . " " . $Result['DateDeDebut'] . " " . $Result['DateDeFin'] . " " . $Result['Tache'] . " " . $Result['Statu'];
    }
}

/* Execution des trois fonction */
AddToDoList();

DelToDoList();

?>

<div class="Resultat">
    <p class="TextResult"><?php echo Result(); ?><p>
</div>
