<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div style="height:400px;background:#eed3a6">
    <ul class="breadcrumb" style="background:#eed3a6">
        <li><a href="<?= base_url('/dashboard') ?>">Home</a></li>
    </ul>
    <div style="padding:4%">
        <h1 style="color:#574327">Sistem pendukung keputusan kelayakan penerima pinjaman bumdes</h1>
        <h4 style="color:#b49e80">Studi Kasus Apotek Obat Bina Farma</h4>

        <div class="col-md-3" style="padding-right:0.5%">
            <div class="col-md-11" style="background:#FFFFFF;border-radius:20px;text-align:center;">
                <div class="col-md-6" style="margin-top:5%;margin-bottom:5%;">
                    <img src="<?= base_url('/public/images/gejala.png'); ?>" width="90%">
                </div>
                <div class="col-md-6" style="text-align:left">
                    <h1 style="font-weight:bold;color:#ad9978;font-style: italic;margin-bottom:2%">12</h1>
                    <h4>Gejala</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="padding-right:0.5%">
            <div class="col-md-11" style="background:#FFFFFF;border-radius:20px;text-align:center;">
                <div class="col-md-6" style="margin-top:5%;margin-bottom:5%;">
                    <img src="<?= base_url('/public/images/penyakit.png'); ?>" width="90%">
                </div>
                <div class="col-md-6" style="text-align:left">
                    <h1 style="font-weight:bold;color:#ad9978;font-style: italic;margin-bottom:2%">12</h1>
                    <h4>Penyakit</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="padding-right:0.5%">
            <div class="col-md-11" style="background:#FFFFFF;border-radius:20px;text-align:center;">
                <div class="col-md-6" style="margin-top:5%;margin-bottom:5%;">
                    <img src="<?= base_url('/public/images/solusi.png'); ?>" width="90%">
                </div>
                <div class="col-md-6" style="text-align:left">
                    <h1 style="font-weight:bold;color:#ad9978;font-style: italic;margin-bottom:2%">12</h1>
                    <h4>Solusi</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="padding-right:0.5%">
            <div class="col-md-11" style="background:#FFFFFF;border-radius:20px;text-align:center;">
                <div class="col-md-6" style="margin-top:5%;margin-bottom:5%;">
                    <img src="<?= base_url('/public/images/basis.png'); ?>" width="90%">
                </div>
                <div class="col-md-6" style="text-align:left">
                    <h1 style="font-weight:bold;color:#ad9978;font-style: italic;margin-bottom:2%">12</h1>
                    <h4>Basis</h4>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap" style="margin-top:-150px;padding:3%">
    <!-- START WIDGETS -->
    <div class="row">
        <div class="col-md-12 pull-left">
            <div class="panel panel-default" style="padding:2%;border-radius:20px">
                <div class="col-md-4">
                    <!-- Slider -->
                    <div id="myCarousel" class="carousel slide col-md-12" data-ride="carousel" style="background:#FFFFFF;">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?= base_url() ?>/public/images/Obat.jpeg" alt="Flashsoft Indonesia" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="<?= base_url() ?>/public/images/Obat.jpeg" alt="Flashsoft Indonesia" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="<?= base_url() ?>/public/images/ (3).jpg" alt="Flashsoft Indonesia" style="width:100%;">
                            </div>

                            <!-- <div class="item">
                                <img src="<?= base_url() ?>/public/images/promo.png" alt="Flashsoft Indonesia" style="width:100%;">
                            </div> -->
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-top:10%">
                        <div class="col-md-4">
                            <img src="<?= base_url('/public/images/diagnosis.png'); ?>" width="100%">
                        </div>
                        <div class="col-md-8">
                            <p style="padding:5% 1% 1% 1%">Klik untuk diagnosa</p>
                            <a href="<?= base_url('/proses') ?>" class="btn btn-success col-md-12">Diagnosa</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8" style="padding: 1%;">
                    <h4>Mencari Pola Penjualan Obat Wajib Apotik (OWA)</h4>
                    <p>Penerapan Metode Algoritma Apriori Untuk Mencari Pola Penjualan Obat Wajib Apotik (OWA) Studi Kasus Apotek Obat Bina Farma </p>
                    <br>
                    <br>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">1</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Masitis (Radang Ambing)</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">2</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Ephhemeral Fever (Demam tiga hari)</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">3</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Scabies (Penyakit Kulit)</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">4</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Bloat (Penyakit Pencernaan)</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">5</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Pneumonia (Peradangan Paru-paru)</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">6</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Brucellosis (Keluron Menular)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">7</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Septicaemia Epizooticae (Ngorok)</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">8</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Jembrana</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">9</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Colibacillosis</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">10</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Pink Eye (Penyakit Mata)</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">11</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Lumpy Skin Disease (LSD)</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">12</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Penyakit Mulut dan Kuku (PMK)</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap" style="margin-bottom: 100px;display:none;">
    <!-- START WIDGETS -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body panel-body-table">
                    <!-- <img src="<?= base_url() ?>/public/adhitama.jpg" alt="Flashsoft Indonesia" width="50%"/> -->
                    <div id="chart"></div>
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script>
                        Highcharts.chart('chart', {
                            title: {
                                text: 'Laporan Grafik'
                            },
                            xAxis: {
                                categories: [
                                    'Januari',
                                    'Februari',
                                    'Maret'
                                ]
                            },
                            labels: {
                                items: [{
                                    html: 'Total Penjualan',
                                    style: {
                                        left: '50px',
                                        top: '18px',
                                        color: ( // theme
                                            Highcharts.defaultOptions.title.style &&
                                            Highcharts.defaultOptions.title.style.color
                                        ) || 'black'
                                    }
                                }]
                            },
                            series: [{
                                type: 'column',
                                name: 'Booking',
                                data: [
                                    10000000,
                                    15000000,
                                    13000000
                                ]
                            }]
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>


<?php
function namaHari($date)
{
    $hasil = '';
    switch ($date) {
        case '0':
            $hasil = 'Minggu';
            break;
        case '1':
            $hasil = 'Senin';
            break;
        case '2':
            $hasil = 'Selasa';
            break;
        case '3':
            $hasil = 'Rabu';
            break;
        case '4':
            $hasil = 'Kamis';
            break;
        case '5':
            $hasil = 'Jumat';
            break;
        case '6':
            $hasil = 'Sabtu';
            break;

        default:
            # code...
            $hasil = '-';
            break;
    }
    return $hasil;
}

function weekOfMonth($dateString)
{
    list($year, $month, $mday) = explode("-", $dateString);
    $firstWday = date("w", strtotime("$year-$month-1"));
    return floor(($mday + $firstWday - 1) / 7) + 1;
}

function namaBulan($bulan)
{
    switch ($bulan) {
        case '1':
            $hasil = 'Januari';
            break;
        case '2':
            $hasil = 'Februari';
            break;
        case '3':
            $hasil = 'Maret';
            break;
        case '4':
            $hasil = 'April';
            break;
        case '5':
            $hasil = 'Mei';
            break;
        case '6':
            $hasil = 'Juni';
            break;
        case '7':
            $hasil = 'Juli';
            break;
        case '8':
            $hasil = 'Agustus';
            break;
        case '9':
            $hasil = 'September';
            break;
        case '10':
            $hasil = 'Oktober';
            break;
        case '11':
            $hasil = 'November';
            break;
        case '12':
            $hasil = 'Desember';
            break;
        default:
            $hasil = 'Januari';
            break;
    }

    return $hasil;
}
?>