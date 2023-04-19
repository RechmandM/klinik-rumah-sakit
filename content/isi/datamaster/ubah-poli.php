<?php
            $kd = "ID" ;
            $id = $_GET['id'];
            $qry = mysqli_query($conn,"SELECT * from poliid where poliid='$id' ");
            $dt = mysqli_fetch_array($qry);
        ?>
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Edit Data Poli</h4>
            </div>
            <div class="modal-body">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                        <label>Id Poli</label>
                        <input name="poliid" type="text" class="form-control" value="<?php echo $id; ?>" readonly />
                    </div><p> 
            <div class="form-group">
                        <label>Nama Poli</label>
                        <input name="nmpoli" type="text" class="form-control" placeholder="Nama Poli ....">
                    </div><p>                                
                <div class="modal-footer">
                    <a class="btn btn-danger" href="?view=data-poli">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                </div>
            </form>
        </div>
    </div>
  <?php
  include"koneksi.php";
  if(isset($_POST['simpan'])){
    $nmpoli=$_POST['nmpoli'];
      
      mysqli_query($conn,"UPDATE poliid set nmpoli='$nmpoli'
      where poliid='$id'");
echo"<script>alert ('Data Sudah Di Ubah Ya')</script>";

echo "<script>windows.reload.windows;</script>";
echo"<meta http-equiv='refresh' content=1;URL=?view=data-poli>";
    
}
?>