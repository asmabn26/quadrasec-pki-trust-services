<?php
// Copiez ce fichier vers connection.php et utilisez uniquement des identifiants locaux.
$host = 'localhost';
$database = 'your_database_name';
$username = 'your_local_username';
$password = 'your_local_password';

$connection = new mysqli($host, $username, $password, $database);
if ($connection->connect_error) {
    exit('Database connection failed.');
}
