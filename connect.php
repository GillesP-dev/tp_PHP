<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1); 
    
    session_start();
    $DB_NAME = "projet_task";
    $DB_USER = "root";
    $DB_PASS = "adrar";


    try {
        $db = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(PDOException $e) {
        $db = NULL;
        echo ("Erreur: " . $e->getMessage());
    }
?>
