<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div style="height:400px;background:#E95793">
    <ul class="breadcrumb" style="background:#E95793">
        <!-- <li><a href="<?= base_url('/dashboard') ?>">Home</a></li> -->
    </ul>
    <div style="padding:4%">
        <h1 style="color:#FFFFFF">BADAN USAHA MILIK DESA PANGKALAN PISANG</h1>
        <h4 style="color:#FFFFFF">( Bangun Wijaya )</h4>



    </div>
</div>

<div class="page-content-wrap" style="margin-top:-250px;padding:3%">
    <!-- START WIDGETS -->
    <div class="row">
        <div class="col-md-3 pull-left">
            <div class="panel panel-default" style="padding:5%;border-radius:15px;background:#F2AFEF;">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Peminjam</h4>
                        <h1>22</h1>
                    </div>
                    <div class="col-md-4">
                        <span class="fa fa-pie-chart" style="font-size:60px;color:#FFFFFF;margin-left:auto;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Jumlah data peminjam</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pull-left">
            <div class="panel panel-default" style="padding:5%;border-radius:15px;background:#C3E2C2;">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Kriteria</h4>
                        <h1>4</h1>
                    </div>
                    <div class="col-md-4">
                        <span class="fa fa-pie-chart" style="font-size:60px;color:#FFFFFF;margin-left:auto;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Jumlah data kriteria</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pull-left">
            <div class="panel panel-default" style="padding:5%;border-radius:15px;background:#EEC759;">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Sub Kriteria</h4>
                        <h1>15</h1>
                    </div>
                    <div class="col-md-4">
                        <span class="fa fa-pie-chart" style="font-size:60px;color:#FFFFFF;margin-left:auto;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Jumlah data sub kriteria</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pull-left">
            <div class="panel panel-default" style="padding:5%;border-radius:15px;background:#FF90BC;">
                <div class="row">
                    <div class="col-md-8">
                        <h4>User</h4>
                        <h1>22</h1>
                    </div>
                    <div class="col-md-4">
                        <span class="fa fa-pie-chart" style="font-size:60px;color:#FFFFFF;margin-left:auto;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Jumlah data peminjam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap" style="margin-top:-100px;padding:3%">
    <!-- START WIDGETS -->
    <div class="row">
        <div class="col-md-4 pull-left">
            <div class="panel panel-default" style="padding:2%;border-radius:20px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.594963024787!2d106.47420877387829!3d-6.316815761812163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4209c33cffce0f%3A0x7eeaf6858ecbff75!2sBangun%20wijaya!5e0!3m2!1sid!2sid!4v1705371259280!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border-radius:20px;"></iframe>
            </div>
        </div>
        <div class="col-md-4 pull-left">
            <div class="panel panel-default" style="padding:2%;border-radius:20px">
                <div class="col-md-12">
                    <!-- Slider -->
                    <div id="myCarousel" class="carousel slide col-md-12" data-ride="carousel" style="background:#FFFFFF;display:none;">
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
                    <div class="col-md-12">
                        <img src="<?= base_url('/images/Struktur.jpeg'); ?>" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 pull-left">
            <div class="panel panel-default" style="padding:2%;border-radius:20px">
                <div class="col-md-12" style="padding: 1%;">
                    <!-- <h4>Sistem pendukung keputusan</h4>
                    <p>Sistem pendukung keputusan kelayakan penerima pinjaman bumdes Menggunakan metode Topsis.</p> -->

                    <h2>Visi dan Misi</h2>
                    <h4>Visi</h4>
                    Mewujudkan kesejahteraan masyarakat melalui pemberdayaan usaha ekonomi masyarakat dan pelayanan sosial dengan desa/kampung motto "Dari Kita Untuk Kita".<br>
                    <br>
                    <h4>Misi</h4>

                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">1</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Meningkatkan perekonomian usaha masyarakat kampung</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">2</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Mengoptimalkan aset kampung agar bermanfaat untuk kesejahteraan kampung</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">3</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Meningkatkan usaha masyarakat dalam pengelolaan potensi ekonomi kampung</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">4</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Mengembangkan rencana kerja sama usaha antar kampung dan/atau dengan pihak ketiga</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">5</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Menciptakan peluang dan jaringan pasar yang mendukung kebutuhan layanan umum warga</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">6</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Membuka lapangan kerja</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">7</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Meningkatkan kesejahteraan masyarakat melalui perbaikan pelayanan umum, pertumbuhan dan pemerataan ekonomi kampung</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <p style="background:#eed3a6;border-radius:50%;color:#FFFFFF;text-align:center;padding:20%">8</p>
                            </div>
                            <div class="col-md-10">
                                <p style="padding:1%">Meningkatkan pendapatan masyarakat kampung dan Pendapatan Asli Kampung.</p>
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