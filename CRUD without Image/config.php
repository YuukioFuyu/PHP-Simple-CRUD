<?php
$databaseHost = 'localhost';
$databaseName = 'crud'; // NAMA DATABASE
$databaseUsername = 'root'; // USERNAME DATABASE
$databasePassword = 'YUUKIO#m1k3r0b3r5on'; //PASSWORD DATABASE

// MENGHUBUNGKAN DATABASE
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// JIKA DATABASE TIDAK ADA ATAU TIDAK TERSAMBUNG
if (mysqli_connect_errno()) {
    printf("%s \n", mysqli_connect_error());
    exit();
}
