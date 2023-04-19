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
                                        List Data Dokter
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="dataTables-example_filter" class="dataTables_filter">
                                    <button style="margin-bottom:50px; padding-right:20px" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
                                    <p>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 64px;">No</th>

                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 64px;">Id Dokter</th>

                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 140px;">Nama Dokter</th>

                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 254px;">Poliid</th>

                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 164px;">Opsi</th>
                                </tr>
                            </thead>
                            <div id="myModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Form Input Data Dokter</h4>
                                        </div>
                                        <?php
                                        include "koneksi.php";
                                        $kd = "ID";
                                        $qry = mysqli_query($conn, "select max(dokterid) as dokterid from dokter where dokterid like '$kd%' ");
                                        $dt = mysqli_fetch_array($qry);
                                        $ambil = $dt['dokterid'];
                                        $no = substr($ambil, 2, 3);
                                        $urut = $no + 1;
                                        $new = $kd . sprintf("%03s", $urut);

                                        $qrypoli = mysqli_query($conn, "select * from poliid");
                                        ?>
                                        <div class="modal-body">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Id Dokter</label>
                                                    <input name="dokterid" type="text" class="form-control" value="<?php echo $new; ?>" readonly />
                                                </div>
                                                <p>
                                                <div class="form-group">
                                                    <label>Nama Dokter</label>
                                                    <input name="nmdokter" type="text" class="form-control" placeholder="Nama Dokter ....">
                                                </div>
                                                <p>
                                                <div class="form-group">
                                                    <label>Poliid</label>
                                                    <select class="form-select" id="poliid" name="poliid">
                                                        <option hidden>POLIID</option>
                                                        <?php
                                                        foreach ($qrypoli as $value) { ?>
                                                            <option value="<?= $value['poliid'] ?>"><?= $value['nmpoli'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <p>
                                                <div class="modal-footer">
                                                    <a class="btn btn-danger" href="?view=data-dokter">Cancel</a>
                                                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                include "koneksi.php";
                                if (isset($_POST['simpan'])) {
                                    $dokterid = $_POST['dokterid'];
                                    $nmdokter = $_POST['nmdokter'];
                                    $poliid = $_POST['poliid'];

                                    mysqli_query($conn, "insert into dokter values ('$dokterid','$nmdokter','$poliid')");
                                    echo "<script>alert ('Data Sudah Masuk Ya')</script>";
                                    echo "<meta http-equiv='refresh' content=1;URL=?view=data-dokter>";
                                }
                                ?>
                                <?php
                                include "koneksi.php";
                                $no = 1;
                                $query = mysqli_query($conn, "select * from dokter");
                                while ($b = mysqli_fetch_array($query)) {

                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $b['dokterid']; ?></td>
                                        <td><?php echo $b['nmdokter']; ?></td>
                                        <td><?php echo $b['poliid']; ?></td>
                                        <td>
                                            <a href="?view=ubahdokter&id=<?php echo $b['dokterid']; ?>"><button class="btn">Edit</button></a>
                                            <a href="?view=hapusdokter&id=<?php echo $b['dokterid']; ?>"><button class="btn">Hapus</button></a>
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