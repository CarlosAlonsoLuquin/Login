<?php
$username = $_POST['Username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'Luquin' && $password === '1234') {
    echo "Bienvenido, $username!";
} else {
    echo "Credenciales incorrectas.";
}
//var_dump($_POST);
