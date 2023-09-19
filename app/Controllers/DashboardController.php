<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
use TCPDF;

class DashboardController extends BaseController
{

	public function index()
	{
		// $this->lisensi();
		if (!isset(session('userData')['level_user'])) {
	        // return redirect()->to(base_url().'/login');
	    }

		$grafik = [];
		$data['grafik'] = $grafik;
		return view('dashboard', $data);
	}

	public function lisensi(){
		

		// $this->session->destroy();
		// print_r(session('lisensi'));
		if((session('lisensi')) !== null){
		    // session_destroy();
		}else{
		    date_default_timezone_set("Asia/Jakarta");

		    $by="Flashsoft-Indonesia";
		    $date = date('Y-m-d H');
		    if(isset($_GET['lisensi'])){
		        $lisensi = $_GET['lisensi'];
		        // echo md5($date.$by[9].$by[0].$by[3]);
		        // exit();
		        if($lisensi){

		        }
		        if($lisensi == md5($date.$by[9].$by[0].$by[3])){
		            // echo 'ok';
		            $this->session->set('lisensi', $lisensi);
		            header("Refresh:0;");
		        }
		    }
		?>
			<link rel="stylesheet" type="text/css" id="theme" href="<?= base_url()?>/public/css/theme-default.css"/>
		    <form class="col-md-12" style="text-align: center;margin-top: 10%;">
		    	<h1>Aktivasi</h1>
		    	<p>Source Code Sistem Informasi by Flashsoft Indonesia</p>
		        <input type="text" name="lisensi" placeholder="Masukkan kode lisensi anda" autofocus class="form-control" style="width: 40%;margin-left: 30%;padding: 3%;">
		        <br>
		        <input type="submit" value="proses" class="btn btn-success btn-lg" style="display: inline-block;">
		    </form>
		<?php
		    exit();
		    // echo 'hello world';
		}
		// exit();

		date_default_timezone_set("Asia/Jakarta");
        //Cek token
        $token="5f035b84d8cb1492947848e69de15a2a"; //"12b3cdf9f74660471be74b387f12e810";
        ob_start();  
        system('ipconfig /all');  
        $mycom=ob_get_contents();  
        ob_clean();  
        $findme = "Physical";  
        $pmac = strpos($mycom, $findme);  
        $code=substr($mycom,($pmac+36),17);  
        $by="Flashsoft-Indonesia";
        $date = date('Y-m-d H');

        // echo $date.'<br>';

        // print_r(md5($date.$by[9].$by[0].$by[3]));exit;
        if($token==md5($code.$by[9].$by[0].$by[3]))
        {
            return true;
            
        }else{
            return false;
            // echo "<br><br><br><br><center><h1>Aplikasi Tidak Asli!!</h1></center";
        }
    }

    function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
    }


    public function cetak()
	{
		
		$html = view('cetak',[
			// 'transaksi'=> $transaksi,
			// 'pembeli' => $pembeli,
			// 'barang' => $barang,
		]);

		$pdf = new TCPDF('L', PDF_UNIT, 'A5', true, 'UTF-8', false);

		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Flashsoft');
		$pdf->SetTitle('Invoice');
		$pdf->SetSubject('Invoice');

		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		$pdf->addPage();

		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		//line ini penting
		$this->response->setContentType('application/pdf');
		//Close and output PDF document
		$pdf->Output('cetak.pdf', 'I');
		
	}

	
	public function about()
	{
		$grafik = [];
		$data['grafik'] = $grafik;
		return view('about', $data);
	}

	public function panduan()
	{
		$grafik = [];
		$data['grafik'] = $grafik;
		return view('panduan', $data);
	}
}
