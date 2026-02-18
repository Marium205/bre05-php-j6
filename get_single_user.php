<?php
require 'connexion.php';

if (!isset($_GET['id'])) {
    echo "Il manque le paramètre id dans l'URL (ex: ?id=3)";
    exit;
}

$query = $db->prepare('SELECT * FROM users WHERE id = :id');
$parameters = [
    'id' => $_GET['id']
];

$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user);

?>