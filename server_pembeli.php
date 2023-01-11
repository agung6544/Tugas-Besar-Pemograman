<?php
// connect to the database
$koneksi = mysqli_connect('localhost', 'root', '', 'pubg');

$id = $_POST ['id'];
$metode = $_POST ['metode'];
$nominal = $_POST ['nominal'];

$query = "INSERT INTO tb_pembeli VALUES('$id','$metode','$nominal')";
$sql = mysqli_query($koneksi, $query);
header('location: success.php');
?>