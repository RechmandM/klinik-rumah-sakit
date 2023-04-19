<div id="page-inner">
    <div class="col-md-12">
<!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Advanced Tables
        </div>
        <div class="panel-body">
        <div class="table-responsive">
        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
            <div class="row">
            <div class="col-sm-6">

                <div class="dataTables_length" id="dataTables-example_length">
                    <label>
                      <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select>
                        List Data Pasien
                     </label>
                </div>
            </div>
            <div class="col-sm-6">
             <div id="dataTables-example_filter" class="dataTables_filter">
                <!-- <button style="margin-bottom:50px padding-right:20px" data-toggle="modal" data-target="#myModal" "><span class="glyphicon glyphicon-plus"></span>Tambah Data</button><p> -->
             </div>
            </div>
            </div>

<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 64px;">No</th>

                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 64px;">Id Pasien</th>

                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 140px;">Nama Pasien</th>

                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 254px;">Tanggal Lahir</th>

                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 140px;">Jenis Kelamin</th>

                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 140px;">Alamat</th>
                </tr>
            </thead>
            <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Input Data Pasien</h4>
            </div>
            <?php
            include"koneksi.php";
            $kd = "PS" ;
            $qry = mysqli_query($conn,"select max(pasienid) as pasienid from pasien where pasienid like '$kd%' ");
            $dt = mysqli_fetch_array($qry);
            $ambil = $dt['pasienid'];
            $no = substr($ambil,2,3);
            $urut = $no + 1;
            $new = $kd . sprintf("%03s", $urut);
        ?>
            <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Id Pasien</label>
                        <input name="pasienid" type="text" class="form-control" value="<?php echo $new; ?>" readonly />
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
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include"koneksi.php";
    if(isset($_POST['simpan'])){
        $pasienid=$_POST['pasienid'];
        $nmpasien=$_POST['nmpasien'];
        $tgllahir=$_POST['tgllahir'];
        $jenkel=$_POST['jenkel'];
        $alamat=$_POST['alamat'];
        
        mysqli_query($conn,"insert into pasien values ('$pasienid','$nmpasien','$tgllahir','$jenkel','$alamat')");
        echo"<script>alert ('Data Sudah Masuk Ya')</script>";
        echo"<meta http-equiv='refresh' content=1;URL=?view=data-pasien>";
}
?>
<?php 
    include"koneksi.php";
    $no=1;
    $query=mysqli_query($conn,"select * from pasien");
    while($b=mysqli_fetch_array($query)){

        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $b['pasienid']; ?></td>
            <td><?php echo $b['nmpasien']; ?></td>
            <td><?php echo $b['tgllahir']; ?></td>
            <td><?php echo $b['jenkel']; ?></td>
            <td><?php echo $b['alamat']; ?></td>
        
        <?php } ?>
</table>
</div>
</div>
                            
</div>
</div>
                    <!--End Advanced Tables -->
</div>
</div>