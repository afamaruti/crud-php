<?php
include("connection.php");

$nim=$_GET['nim'];

$delete = "DELETE FROM mhs WHERE nim='$nim'";

if ($koneksi->query($delete) === TRUE) {
    echo "
                <script>
                alert ('Data Berhasil Dihapus');
                document.location.href='index.php';
                </script>";
                }
            else{
                echo "
                <script>
                alert ('Data Gagal Dihapus');
                document.location.href='index.php';
                </script>";
            }

?>