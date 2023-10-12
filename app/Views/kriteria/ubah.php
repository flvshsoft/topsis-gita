<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        
        <!-- START WIDGETS -->                                        
            
        <div class="row">
            <div class="col-md-12">                            
                <form class="form-horizontal" method="POST" action="<?= base_url($url) ?>">
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
                                    <label class="col-md-3 col-xs-12 control-label">Nama Kriteria</label>
                                    <div class="col-md-6 col-xs-12 control-label">             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="hidden" name="id_kriteria" value="<?= $model['id_kriteria'] ?>" class="form-control" autofocus=""/>
                                            <input type="text" name="nama_kriteria" value="<?= $model['nama_kriteria'] ?>" class="form-control" autofocus=""/>
                                        </div>                                 
                                    </div>
                                </div>                                              
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Bobot</label>
                                    <div class="col-md-6 col-xs-12 control-label">             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="bobot" value="<?= $model['bobot'] ?>" class="form-control"/>
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
