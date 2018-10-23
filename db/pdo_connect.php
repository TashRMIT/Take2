<?php

function dbConnect()
{
    $dsn = 'sqlite:db/rlg.db';

    try{
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        $errMsg  = "Failed connecting to the database: ";
        $errMsg .= $e->getMessage();
        exit($errMsg);
    }

    return $db;
}

?>
