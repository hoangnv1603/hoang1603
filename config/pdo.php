<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
    $conn = new mysqli($servername, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOE$th) {
    //throw $th;
}