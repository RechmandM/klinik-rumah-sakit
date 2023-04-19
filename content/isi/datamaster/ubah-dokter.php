        <?php
            $kd = "ID" ;
            $id = $_GET['id'];
            $qry = mysqli_query($conn,"SELECT * from dokter where dokterid='$id' ");
            $dt = mysqli_fetch_array($qry);
        ?>
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Edit Data Dokter</h4>
            </div>
            <div class="modal-body">
            <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Id Dokter</label>
                        <input name="dokterid" type="text" class="form-control" value="<?php echo $id; ?>" readonly />
                    </div><p>  
                    <div class="form-group">
                        <label>Nama Dokter</label>
                        <input name="nmdokter" type="text" class="form-control" placeholder="Nama Dokter ....">
                    </div><p>    
                    <div class="form-group">
                        <label>Poliid</label>
                        <select class="form-select" id="poliid" name="poliid">
                        <option selected>POLIID</option>
                        <option value="ID002">ID002</option>
                        <option value="ID003">ID003</option>
                        <option value="ID005">ID005</option>
                </select>
                    </div><p>                                                              
                <div class="modal-footer">
                <a class="btn btn-danger" href="?view=data-dokter">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                </div>
            </form>
        </div>
    </div>
  <?php
  include"koneksi.php";
  if(isset($_POST['simpan'])){
      $nmdokter=$_POST['nmdokter'];
      $poliid=$_POST['poliid'];
      
      mysqli_query($conn,"UPDATE dokter set nmdokter='$nmdokter',poliid='$poliid' 
      where dokterid='$id'");
      echo"<script>alert ('Data Sudah Di Ubah Ya')</script>";

    echo "<script>windows.reload.windows;</script>";
    echo"<meta http-equiv='refresh' content=1;URL=?view=data-dokter>";
}
?>