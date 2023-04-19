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
                        List Data Poli
                     </label>
                </div>
            </div>
            <div class="col-sm-6">
             <div id="dataTables-example_filter" class="dataTables_filter">
                <button style="margin-bottom:50px; padding-right:20px" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Tambah Data</button><p>
             </div>
            </div>
            </div>

<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 64px;">No</th>

                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 64px;">Id Poli</th>

                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 140px;">Nama Poli</th>

                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 164px;">Opsi</th>
                </tr>
            </thead>
            <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Input Data Poli</h4>
            </div>
            <?php
            include"koneksi.php";
            $kd = "ID" ;
            $qry = mysqli_query($conn,"select max(poliid) as poliid from poliid where poliid like '$kd%' ");
            $dt = mysqli_fetch_array($qry);
            $ambil = $dt['poliid'];
            $no = substr($ambil,2,3);
            $urut = $no + 1;
            $new = $kd . sprintf("%03s", $urut);
        ?>
            <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Id Poli</label>
                        <input name="poliid" type="text" class="form-control" value="<?php echo $new; ?>" readonly />
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
</div>
<?php
    include"koneksi.php";
    if(isset($_POST['simpan'])){
        $poliid=$_POST['poliid'];
        $nmpoli=$_POST['nmpoli'];
        
        mysqli_query($conn,"insert into poliid values ('$poliid','$nmpoli')");
        echo"<script>alert ('Data Sudah Masuk Ya')</script>";
        echo"<meta http-equiv='refresh' content=1;URL=?view=data-poli>";
}
?>
<?php 
    include"koneksi.php";
    $no=1;
    $query=mysqli_query($conn,"select * from poliid");
    while($b=mysqli_fetch_array($query)){

        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $b['poliid']; ?></td>
            <td><?php echo $b['nmpoli']; ?></td>
            <td>
                <a href="?view=ubahpoli&id=<?php echo $b['poliid']; ?>"><button class="btn">Edit</button></a>
                <a href="?view=hapuspoli&id=<?php echo $b['poliid']; ?>"><button class="btn">Hapus</button></a>
            </td>
        
        <?php } ?>
</table>
</div>
</div>
                            
</div>
</div>
                    <!--End Advanced Tables -->
</div>
</div>