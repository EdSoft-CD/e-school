<?php

function db_connect()
{
    require __DIR__ . "/config.php";

    try {
        $connection = new PDO(DSN, DB_USER, DB_PASSWORD, $options);
    } catch (PDOException $e) {
        printf(
            "Echec de connexion à la base de données : %s\n",
            $e->getMessage()
        );
        exit();
    }
    
    return $connection;
}