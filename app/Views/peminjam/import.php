<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <!-- START WIDGETS -->

    <div class="row">
        <div class="col-md-12">
            <!-- <form method="post" action="/siswa/simpanExcel" enctype="multipart/form-data"> -->
                <form class="form-horizontal" method="POST" action="<?= base_url('/peminjam/simpanExcel') ?>" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?= $judul ?></h3>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body">
                            </div>
                            <div class="panel-body form-group-separated">

                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Import</label>
                                    <div class="col-md-6 col-xs-12 control-label">
                                        <div class="input-group">
                                            <input type="file" name="fileexcel" class="form-control" id="file" required accept=".xls, .xlsx" />
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