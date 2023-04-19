<?php
// koneksi database
include"koneksi.php";

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus data dari db
mysqli_query($conn, "DELETE from pasien where pasienid='$id'");

// back to index
header("location:?view=data-pasien");