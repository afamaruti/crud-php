<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "dbmhs_anggota";

$koneksi = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>