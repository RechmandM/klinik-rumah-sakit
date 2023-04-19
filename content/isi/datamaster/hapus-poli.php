<?php
// koneksi database
include"koneksi.php";

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus data dari db
mysqli_query($conn, "DELETE from poliid where poliid='$id'");

// back to index
header("location:?view=data-poli");