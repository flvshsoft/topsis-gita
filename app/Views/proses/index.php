<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- START WIDGETS -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <!-- <a href="<?= base_url('/user/tambah') ?>" class="btn btn-primary"> Tambah Peminjam</a> -->
                </div>
                <div class="panel-body panel-body-table">
                    <h1>Dataset Awal</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Formulir Pengajuan</th>
                                    <th>Jenis Usaha</th>
                                    <th>Periode Pinjam</th>
                                    <th>Total Pinjam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;

                                foreach ($model as $v) {
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
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <h1>Konversi</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Alternatif</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $konversiAllList = [];
                                $konversiList = [];
                                foreach ($model as $key => $value) {
                                    $no++;
                                    $c1 = $modelSubKriteria['1'][$value['formulir']];
                                    $c2 = $modelSubKriteria['2'][$value['jenis_usaha']];
                                    $periode_pinjaman = 0;
                                    foreach ($modelSubKriteria['3'] as $key2 => $value2) {
                                        // echo $key2;
                                        $temp = str_replace('.', '', $key2);
                                        // echo $temp;
                                        // echo '<br>';
                                        $temp2 = explode(' - ', $temp);
                                        if (($value['total_pinjaman'] >= $temp2[0]) && ($value['total_pinjaman'] < $temp2[1])) {
                                            $periode_pinjaman = $value2;
                                            break;
                                        }
                                        // print_r($temp2);
                                        // echo '<br>';
                                    }
                                    $c3 = $periode_pinjaman;
                                    $c4 = $modelSubKriteria['4'][$value['periode_pinjaman']];
                                    // konversi
                                    $konversiList['1'][] = $c1;
                                    $konversiList['2'][] = $c2;
                                    $konversiList['3'][] = $c3;
                                    $konversiList['4'][] = $c4;
                                    // konversi all
                                    $temp = [$c1, $c2, $c3, $c4];
                                    $konversiAllList[] = $temp;
                                ?>
                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td>A<?= $no ?></td>
                                        <td><?= $modelSubKriteria['1'][$value['formulir']] ?></td>
                                        <td><?= $modelSubKriteria['2'][$value['jenis_usaha']] ?></td>
                                        <td>
                                            <?php
                                            echo $periode_pinjaman;
                                            // echo $value['total_pinjaman'];
                                            ?>
                                        </td>
                                        <td><?= $modelSubKriteria['4'][$value['periode_pinjaman']] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <h1>Bobot Ternormalisasi</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr id="trow_<?= $no ?>">
                                    <td class="text-center"><?= $no ?></td>
                                    <td>
                                        <?php
                                        // print_r($konversiList['1']);
                                        $normalC1List = [];
                                        foreach ($konversiList['1'] as $key => $value) {
                                            $normalC1List[] = pow($value, 2);
                                            // echo pow($value,2);
                                            // echo '<br>';
                                        }
                                        echo $c1 = number_format(sqrt(array_sum($normalC1List)), 6);
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $normalC1List = [];
                                        foreach ($konversiList['2'] as $key => $value) {
                                            $normalC1List[] = pow($value, 2);
                                        }
                                        echo $c2 = number_format(sqrt(array_sum($normalC1List)), 6);
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $normalC1List = [];
                                        foreach ($konversiList['3'] as $key => $value) {
                                            $normalC1List[] = pow($value, 2);
                                        }
                                        echo $c3 = number_format(sqrt(array_sum($normalC1List)), 6);
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $normalC1List = [];
                                        foreach ($konversiList['4'] as $key => $value) {
                                            $normalC1List[] = pow($value, 2);
                                        }
                                        echo $c4 = number_format(sqrt(array_sum($normalC1List)), 6);
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <?php
                        $no = 0;
                        $normalAllList = [$c1, $c2, $c3, $c4];
                        $no++;
                        ?>
                    </div>

                    <h1>Bobot Kriteria</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="trow_<?= $no ?>">
                                    <td class="text-center"><?= $no ?></td>
                                    <?php
                                    $no = 0;
                                    $kriteriaList = [];
                                    foreach ($modelKriteria as $key => $value) {
                                        $no++;
                                        $kriteriaList[$no] = $value['bobot'];
                                    ?>
                                        <td><?= $value['bobot']; ?></td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <h1>Menghitung Tabel Matriks Ternormalisasi X</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Alternatif</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                // print_r($konversiAllList);
                                foreach ($konversiAllList as $key => $value) {
                                    $no++;
                                    $c1 = number_format($value[0] / $normalAllList[0], 6);
                                    $c2 = number_format($value[1] / $normalAllList[1], 6);
                                    $c3 = number_format($value[2] / $normalAllList[2], 6);
                                    $c4 = number_format($value[3] / $normalAllList[3], 6);
                                ?>
                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td>A<?= $no ?></td>
                                        <td><?= $c1 ?></td>
                                        <td><?= $c2 ?></td>
                                        <td><?= $c3 ?></td>
                                        <td><?= $c4 ?></td>

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