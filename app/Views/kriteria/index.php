<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?= base_url('/kriteria/tambah')?>" class="btn btn-primary"> Tambah Kriteria</a>
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Nama Kriteria</th>
                                        <th>Bobot</th>
                                        <th width="190">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                <?php 
                                $no=0;

                                foreach ($user as $v) {
                                    $no++;
                                ?>

                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $v['nama_kriteria'] ?></td>
                                        <td><?= $v['bobot'] ?></td>
                                        <td>

                                            <a href="<?= base_url()?>/kriteria/ubah/<?=$v['id_kriteria']?>" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>

                                            <a class="btn btn-danger btn-rounded btn-condensed btn-sm" href="<?= base_url()?>/kriteria/hapus/<?=$v['id_kriteria']?>" onClick="return confirm('Hapus Data Ini ?')"><span class="fa fa-times"></span></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>                                
                    </div>
                </div>                                                
            </div>
        </div>                        
    </div>
    <!-- END PAGE CONTENT WRAPPER -->   
<?= $this->endSection() ?>  