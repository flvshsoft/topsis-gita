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
                    <!-- <h1>Dataset Awal</h1> -->
                    <div class="table-responsive" style="display: none;">
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
                                    <th>Tunggakan</th>
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
                                        <td><?= number_format($v['total_pinjaman']) ?></td>
                                        <td><?= $v['periode_pinjaman'] ?></td>
                                        <td><?= $v['tunggakan'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- <h1>Konversi</h1> -->
                    <div class="table-responsive" style="display: none;">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Alternatif</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $konversiAllList = [];
                                $konversiList = [];
                                $alterList = [];
                                foreach ($model as $key => $value) {
                                    $no++;
                                    $alterList["A" . $no] = $value['nama'];
                                    // $c0 = $modelSubKriteria['1'][$value['formulir']];
                                    $c1 = $modelSubKriteria['1'][$value['jenis_usaha']];
                                    $periode_pinjaman = 0;
                                    foreach ($modelSubKriteria['2'] as $key2 => $value2) {
                                        // echo $key2;
                                        $temp = str_replace('.', '', $key2);
                                        // echo $temp;
                                        // echo '<br>';
                                        $temp2 = explode(' - ', $temp);
                                        if (($value['total_pinjaman'] > $temp2[0]) && ($value['total_pinjaman'] <= $temp2[1])) {
                                            $periode_pinjaman = $value2;
                                            break;
                                        }
                                        // print_r($temp2);
                                        // echo '<br>';
                                    }
                                    $c2 = $periode_pinjaman;
                                    $c3 = $modelSubKriteria['3'][$value['periode_pinjaman']];
                                    $c4 = $modelSubKriteria['4'][$value['tunggakan']];
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
                                        <td><?= $modelSubKriteria['1'][$value['jenis_usaha']] ?></td>
                                        <td>
                                            <?php
                                            echo $periode_pinjaman;
                                            // echo $value['total_pinjaman'];
                                            ?>
                                        </td>
                                        <td><?= $c3 ?></td>
                                        <td><?= $c4 ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- <h1>Bobot Ternormalisasi</h1> -->
                    <div class="table-responsive" style="display: none;">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
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
                                        echo $c0 = number_format(sqrt(array_sum($normalC1List)), 5);
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $normalC1List = [];
                                        foreach ($konversiList['2'] as $key => $value) {
                                            $normalC1List[] = pow($value, 2);
                                        }
                                        echo $c1 = number_format(sqrt(array_sum($normalC1List)), 5);
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $normalC1List = [];
                                        foreach ($konversiList['3'] as $key => $value) {
                                            $normalC1List[] = pow($value, 2);
                                        }
                                        echo $c2 = number_format(sqrt(array_sum($normalC1List)), 5);
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $normalC1List = [];
                                        foreach ($konversiList['2'] as $key => $value) {
                                            $normalC1List[] = pow($value, 2);
                                        }
                                        echo $c3 = number_format(sqrt(array_sum($normalC1List)), 5);
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $normalC1List = [];
                                        foreach ($konversiList['3'] as $key => $value) {
                                            $normalC1List[] = pow($value, 2);
                                        }
                                        echo $c4 = number_format(sqrt(array_sum($normalC1List)), 5);
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <?php
                        $no = 0;
                        $normalAllList = [$c0, $c1, $c2, $c3];
                        $no++;
                        ?>
                    </div>

                    <!-- <h1>Bobot Kriteria</h1> -->
                    <div class="table-responsive" style="display: none;">
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
                                        $kriteriaList[] = $value['bobot'];
                                    ?>
                                        <td><?= $value['bobot']; ?></td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <!-- <h1>1. Menghitung Tabel Matriks Ternormalisasi X</h1> -->
                    <div class="table-responsive" style="display: none;">
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
                                    $c0 = number_format($value[0] / $normalAllList[0], 5);
                                    $c1 = number_format($value[1] / $normalAllList[1], 5);
                                    $c2 = number_format($value[2] / $normalAllList[2], 5);
                                    $c3 = number_format($value[3] / $normalAllList[3], 5);
                                ?>
                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td>A<?= $no ?></td>
                                        <td><?= $c0 ?></td>
                                        <td><?= $c1 ?></td>
                                        <td><?= $c2 ?></td>
                                        <td><?= $c3 ?></td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>


                    <!-- <h1>2. Menghitung Tabel Matriks Ternormalisasi Y</h1> -->
                    <div class="table-responsive" style="display: none;">
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
                                $normalYList = [];
                                foreach ($konversiAllList as $key => $value) {
                                    $no++;
                                    $c0 = number_format($value[0] * $kriteriaList[0], 0);
                                    $c1 = number_format($value[1] * $kriteriaList[1], 0);
                                    $c2 = number_format($value[2] * $kriteriaList[2], 0);
                                    $c3 = number_format($value[3] * $kriteriaList[3], 0);

                                    $normalYList[0][] = $c0;
                                    $normalYList[1][] = $c1;
                                    $normalYList[2][] = $c2;
                                    $normalYList[3][] = $c3;
                                ?>
                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td>A<?= $no ?></td>
                                        <td><?= $c0 ?></td>
                                        <td><?= $c1 ?></td>
                                        <td><?= $c2 ?></td>
                                        <td><?= $c3 ?></td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- <h1>3. Menghitung Nilai Solusi Ideal Positif dan negatif </h1> -->
                    <div class="table-responsive" style="display: none;">
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
                                    <td class="text-center">A+</td>
                                    <?php
                                    $no = 0;
                                    $idealAPlus = [];
                                    foreach ($normalYList as $key => $value) {
                                        $no++;
                                        $idealAPlus[] = max($value);
                                    ?>
                                        <td><?= max($value) ?></td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                                <tr id="trow_<?= $no ?>">
                                    <td class="text-center">A-</td>
                                    <?php
                                    $no = 0;
                                    $idealAMin = [];
                                    foreach ($normalYList as $key => $value) {
                                        $no++;
                                        $idealAMin[] = min($value);
                                    ?>
                                        <td><?= min($value) ?></td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- <h1>4. Mencari Jarak Terpendek Dengan Solusi Ideal Positif dan Negatif </h1> -->
                    <div class="table-responsive" style="display: none;">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Alternatif</th>
                                    <th>D+</th>
                                    <th>D-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($normalYList[0] as $key => $value) {
                                    $no++;
                                    $c0 = number_format($normalYList[0][$key], 0);
                                    $c1 = number_format($normalYList[1][$key], 0);
                                    $c2 = number_format($normalYList[2][$key], 0);
                                    $c3 = number_format($normalYList[3][$key], 0);
                                    $temp4 = [];
                                    $temp4Min = [];
                                    foreach ($normalYList as $key2 => $value2) {
                                        $temp = number_format($normalYList[$key2][$key], 0);
                                        // echo $temp.' - '.$idealAPlus[$key2];
                                        // plus
                                        $temp2 = $temp - $idealAPlus[$key2];
                                        $temp3 = pow($temp2, 2);
                                        $temp4[] = $temp3;
                                        // min
                                        $temp2 = $temp - $idealAMin[$key2];
                                        $temp3 = pow($temp2, 2);
                                        $temp4Min[] = $temp3;
                                        // echo '<br>';
                                    }
                                    $dPlus = sqrt(array_sum($temp4));
                                    $dMin = number_format(sqrt(array_sum($temp4Min)), 5);
                                    // exit;

                                ?>
                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td>A<?= $no ?></td>
                                        <td><?= $dPlus ?></td>
                                        <td><?= $dMin ?></td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>


                    <!-- <h1>5. Menentukan Nilai Preferensi Untuk Setiap Alternatif </h1> -->
                    <div class="table-responsive" style="display: none;">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Alternatif</th>
                                    <th>V</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $prefList = [];
                                foreach ($normalYList[0] as $key => $value) {
                                    $no++;
                                    $c0 = number_format($normalYList[0][$key], 0);
                                    $c1 = number_format($normalYList[1][$key], 0);
                                    $c2 = number_format($normalYList[2][$key], 0);
                                    $c3 = number_format($normalYList[3][$key], 0);
                                    $temp4 = [];
                                    $temp4Min = [];
                                    foreach ($normalYList as $key2 => $value2) {
                                        $temp = number_format($normalYList[$key2][$key], 0);
                                        // echo $temp.' - '.$idealAPlus[$key2];
                                        // plus
                                        $temp2 = $temp - $idealAPlus[$key2];
                                        $temp3 = pow($temp2, 2);
                                        $temp4[] = $temp3;
                                        // min
                                        $temp2 = $temp - $idealAMin[$key2];
                                        $temp3 = pow($temp2, 2);
                                        $temp4Min[] = $temp3;
                                        // echo '<br>';
                                    }
                                    $dPlus = sqrt(array_sum($temp4));
                                    $dMin = number_format(sqrt(array_sum($temp4Min)), 5);
                                    // exit;
                                    $v = $dMin / ($dMin + $dPlus);
                                    $temp = ["A" . $no, $v];
                                    $temp['Alter'] = "A" . $no;
                                    $temp['v'] = $v;
                                    $prefList[] = $temp;

                                ?>
                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td>A<?= $no ?></td>
                                        <td><?= $v ?></td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <h1>Hasil </h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50">No</th>
                                    <th>Alternatif</th>
                                    <th>Nama</th>
                                    <th>Hasil Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                // print_r($prefList);
                                // sort($prefList);
                                array_multisort(array_column($prefList, "v"), SORT_DESC, $prefList);
                                foreach ($prefList as $key => $value) {
                                    $no++;
                                ?>
                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $value[0] ?></td>
                                        <td><?= $alterList[$value[0]] ?></td>
                                        <td><?= $value[1] ?></td>
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