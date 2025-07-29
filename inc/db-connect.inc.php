<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=diary', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    die();
}

