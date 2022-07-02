<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010051";
$db = "klinik_312010051";
$con = mysqli_connect($host, $user, $pass, $db);
if ($con == false)
{
echo "Koneksi ke server gagal.";
die();
} #else echo "";
?>
