<?php

$host = 'sql210.epizy.com'; // ou conforme o painel
$dbname = 'if0_39591042_travel_diary'; // o nome exato da base
$user = 'if0_39591042';
$pass = 'pirusas14';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo "❌ Erro na ligação: " . $e->getMessage();
    die();
}
?>
