<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = ''; // XAMPP default is empty password
$db_name = 'bookshop_db';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>