<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?= base_url('/peminjam/tambah')?>" class="btn btn-primary"> Tambah Peminjam</a>
                        <a href="<?= base_url('/peminjam/import')?>" class="btn btn-success"> Import Peminjam</a>
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Formulir Pengajuan</th>
                                        <th>Jenis Usaha</th>
                                        <th>Total Pinjam</th>
                                        <th>Periode Pinjam</th>
                                        <th>Tunggakan</th>
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
                                        <td><?= $v['nama'] ?></td>
                                        <td><?= $v['jenis_kelamin'] ?></td>
                                        <td><?= $v['formulir'] ?></td>
                                        <td><?= $v['jenis_usaha'] ?></td>
                                        <td><?= $v['total_pinjaman'] ?></td>
                                        <td><?= $v['periode_pinjaman'] ?></td>
                                        <td><?= $v['tunggakan'] ?></td>
                                        <td>

                                            <a href="<?= base_url()?>/peminjam/ubah/<?=$v['id_peminjam']?>" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>

                                            <a class="btn btn-danger btn-rounded btn-condensed btn-sm" href="<?= base_url()?>/peminjam/hapus/<?=$v['id_peminjam']?>" onClick="return confirm('Hapus Data Ini ?')"><span class="fa fa-times"></span></a>
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