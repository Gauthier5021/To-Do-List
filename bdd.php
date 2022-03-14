<?php

function ConnectBdd()
{
    $bdd = ["mysql", "localhost", "autosun", "utf8", "root", "root"];
    $db = new PDO("$bdd[0]:host=$bdd[1];dbname=$bdd[2];charset=$bdd[3], $bdd[4], $bdd[5]");
    return $db;
}

ConnectBdd();

?>