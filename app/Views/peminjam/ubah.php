<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <!-- START WIDGETS -->

    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="<?= base_url($url) ?>">
                <?= csrf_field() ?>
                <input type="hidden" name="id_peminjam" value="<?= $model['id_peminjam'] ?>" class="form-control" autofocus="" />
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?= $judul ?></h3>
                    </div>
                    <div class="col-md-12">
                        <div class="panel-body">
                        </div>
                        <div class="panel-body form-group-separated">

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Nama</label>
                                <div class="col-md-6 col-xs-12 control-label">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" name="nama" value="<?= $model['nama'] ?>" class="form-control" autofocus="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Jenis Kelamin</label>
                                <div class="col-md-6 col-xs-12 control-label">
                                    <select class="form-control select" name="jenis_kelamin">
                                        <option value="<?= $model['jenis_kelamin'] ?>"><?= $model['jenis_kelamin'] ?></option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Formulir</label>
                                <div class="col-md-6 col-xs-12 control-label">
                                    <select class="form-control select" name="formulir">
                                        <option value="<?= $model['formulir'] ?>"><?= $model['formulir'] ?></option>
                                        <?php foreach ($modelSubKriteria[1] as $key => $value) : ?>
                                            <option><?= $value ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Jenis Usaha</label>
                                <div class="col-md-6 col-xs-12 control-label">
                                    <select class="form-control select" name="jenis_usaha">
                                        <option value="<?= $model['jenis_usaha'] ?>"><?= $model['jenis_usaha'] ?></option>
                                        <?php foreach ($modelSubKriteria[2] as $key => $value) : ?>
                                            <option><?= $value ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Total Pinjaman</label>
                                <div class="col-md-6 col-xs-12 control-label">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" name="total_pinjaman" value="<?= $model['total_pinjaman'] ?>" class="form-control" autofocus="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Periode Pinjaman</label>
                                <div class="col-md-6 col-xs-12 control-label">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" name="periode_pinjaman" value="<?= $model['periode_pinjaman'] ?>" class="form-control" autofocus="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Tunggakan</label>
                                <div class="col-md-6 col-xs-12 control-label">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" name="tunggakan" value="<?= $model['tunggakan'] ?>" class="form-control" autofocus="" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="panel-footer">
                        <!-- <button class="btn btn-default">Kembali</button>                                     -->
                        <input type="submit" value="SIMPAN" class="btn btn-primary pull-right">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>