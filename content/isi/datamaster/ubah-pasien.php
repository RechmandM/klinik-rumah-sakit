<?php
            $kd = "PS" ;
            $id = $_GET['id'];
            $qry = mysqli_query($conn,"SELECT * from pasien where pasienid='$id' ");
            $dt = mysqli_fetch_array($qry);
        ?>
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Edit Data Pasien</h4>
            </div>
            <div class="modal-body">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            
                        <label>Id Pasien</label>
                        <input name="pasienid" type="text" class="form-control" value="<?php echo $id ?>" readonly />
                    </div><p>
                    <div class="form-group">  
                        <label>Nama Pasien</label>
                        <input name="nmpasien" type="text" class="form-control" placeholder="Nama Pasien ....">
                    </div><p>    
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input name="tgllahir" type="date" class="form-control" value="<?php echo date('Y-m-d') ?>" >
                    </div><p>                                                              
                    <div class="form-group">
                        <label>Jenis Kelamin</label><p>
                        <input name="jenkel" type="radio"  value="Laki-Laki"> Laki-Laki     
                        <input name="jenkel" type="radio" value="Perempuan"> Perempuan <p>
                    </div><p>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" type="text" class="form-control" placeholder="Alamat ....">
                    </div><p>
                </div>                                            
                <div class="modal-footer">
                <a class="btn btn-danger" href="?view=data-pasien">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                </div>
            </form>
        </div>
    </div>
  <?php
  include"koneksi.php";
  if(isset($_POST['simpan'])){
    $nmpasien=$_POST['nmpasien'];
    $tgllahir=$_POST['tgllahir'];
    $jenkel=$_POST['jenkel'];
    $alamat=$_POST['alamat'];
      
      mysqli_query($conn,"UPDATE pasien set nmpasien='$nmpasien',tgllahir='$tgllahir',jenkel='$jenkel',alamat='$alamat'
      where pasienid='$id'");
      echo"<script>alert ('Data Sudah Di Ubah Ya')</script>";

      echo "<script>windows.reload.windows;</script>";
      echo"<meta http-equiv='refresh' content=1;URL=?view=data-pasien>";
    
}
?>