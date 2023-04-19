<?php
session_start();
session_destroy();
echo "<script>alert('Anda Berhasil Logut');</script>";
echo "<script>location='index.php';</script>";
?>