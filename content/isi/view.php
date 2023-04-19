<?php 
error_reporting(0);
?>
<?php 

	if ($_GET['view']==''){
		include'content/isi/halaman-utama.php';
	}

	elseif($_GET['view']=='halu'){
		include'content/isi/halaman-utama.php';
	}

	elseif($_GET['view']=='data'){
		include'content/isi/datamaster/mastertable.php';
	}

	elseif($_GET['view']=='data-dokter'){
		include'content/isi/datamaster/data-dokter.php';
	}

	elseif($_GET['view']=='data-poli'){
		include'content/isi/datamaster/data-poli.php';
	}

	elseif($_GET['view']=='data-pasien'){
		include'content/isi/datamaster/data-pasien.php';
	}

	elseif($_GET['view']=='data-berobat'){
		include'content/isi/datamaster/data-berobat.php';
	}

	elseif($_GET['view']=='hapusberobat'){
		include'content/isi/datamaster/hapus-berobat.php';
	}

	elseif($_GET['view']=='hapuspoli'){
		include'content/isi/datamaster/hapus-poli.php';
	}

	elseif($_GET['view']=='hapuspasien'){
		include'content/isi/datamaster/hapus-pasien.php';
	}

	elseif($_GET['view']=='hapusdokter'){
		include'content/isi/datamaster/hapus-dokter.php';
	}


	elseif($_GET['view']=='ubahberobat'){
		include'content/isi/datamaster/ubah-berobat.php';
	}

	elseif($_GET['view']=='ubahdokter'){
		include'content/isi/datamaster/ubah-dokter.php';
	}

	elseif($_GET['view']=='ubahpasien'){
		include'content/isi/datamaster/ubah-pasien.php';
	}

	elseif($_GET['view']=='ubahpoli'){
		include'content/isi/datamaster/ubah-poli.php';
	}

	elseif($_GET['view']=='list-data-berobat'){
		include'list-data-berobat.php';
	}

	elseif($_GET['view']=='ldokter'){
		include'content/isi/datamaster/ldokter.php';
	}

	elseif($_GET['view']=='lpasien'){
		include'content/isi/datamaster/lpasien.php';
	}

	elseif($_GET['view']=='lberobat'){
		include'content/isi/datamaster/lberobat.php';
	}

	elseif($_GET['view']=='logout'){
		include'content/isi/datamaster/logout.php';
	}

	else{
		include"blank.html";
	}


?>