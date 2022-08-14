<?php
session_start();
include "connect.php";
$id_barang = $_GET['id'];
if(isset($_SESSION['favorit'][$id_barang]))
{
  $_SESSION['favorit'][$id_barang] += 1;
}
else
{
  $_SESSION['favorit'][$id_barang] = 1;
}
echo "<script>alert('Barang masuk favorit');</script>";
echo "<script>location='favorit.php';</script>";
?>
