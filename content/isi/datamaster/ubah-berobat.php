        <?php
            $kd = "TR" ;
            $id = $_GET['id'];
            $qry = mysqli_query($conn,"SELECT * from berobat where notransaksi='$id' ");
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
                        <label>Id Pasien</label>
                        <select class="form-select" id="pasienid" name="pasienid">
                        <option selected>Id Pasien</option>
                        <option value="PS003">PS003</option>
                        <option value="PS003">PS003</option>
                        <option value="PS004">PS004</option>
                        </select>
                    </div><p>    
                    <div class="form-group">
                        <label>Tanggal Berobat</label>
                        <input name="tglberobat" type="date" class="form-control" value="<?php echo date('Y-m-d') ?>" >
                    </div><p>                                                              
                    <div class="form-group">
                        <label>Id Dokter</label>
                        <select class="form-select" id="dokterid" name="dokterid">
                        <option selected>Id Dokter</option>
                        <option value="ID002">ID002</option>
                        <option value="ID003">ID003</option>
                        <option value="ID005">ID005</option>
                        </select>
                    </div><p>
                    <div class="form-group">
                        <label>Keluhan</label>
                        <input name="keluhan" type="text" class="form-control" placeholder="Keluhan ....">
                    </div><p>
                    <div class="form-group">
                        <label>Biaya Admin</label>
                        <input name="biayaadm" type="text" class="form-control" placeholder="Biaya Admin ....">
                    </div><p>                                               
                <div class="modal-footer">
                    <a class="btn btn-danger" href="?view=data-berobat">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                </div>
            </form>
        </div>
    </div>
<?php
  include"koneksi.php";
  if(isset($_POST['simpan'])){
        $pasienid=$_POST['pasienid'];
        $tglberobat=$_POST['tglberobat'];
        $dokterid=$_POST['dokterid'];
        $keluhan=$_POST['keluhan'];
        $biayaadm=$_POST['biayaadm'];
      
      mysqli_query($conn,"UPDATE berobat set pasienid='$pasienid',tglberobat='$tglberobat',dokterid='$dokterid',keluhan='$keluhan',biayaadm='$biayaadm'
      where notransaksi='$id'");
      echo"<script>alert ('Data Sudah Di Ubah Ya')</script>";

      echo "<script>windows.reload.windows;</script>";
      echo"<meta http-equiv='refresh' content=1;URL=?view=data-berobat>";
    
}
?>