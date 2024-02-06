<?php

namespace App\Controllers;


use CodeIgniter\Controller;

class PeminjamController extends BaseController
{


	public function index()
	{
		$data['user'] = $this->modelPeminjam
			// ->join('pegawai', 'pegawai.id_user=user.id_user', 'left')
			->findAll();

		echo view('/peminjam/index', $data);
	}

	public function tambah()
	{
		$id = 0;
		$data['judul'] = 'Tambah Peminjam';
		$data['url'] = 'peminjam/tambah';
		$data['id'] = $id;

		$data['modelSubKriteria'] = $this->modelSubKriteria
			->findAll();

		$temp = [];
		foreach ($data['modelSubKriteria'] as $key => $value) {
			$temp[$value['id_kriteria']][] = $value['nama_sub_kriteria'];
		}
		// print_r($temp);
		// exit;
		$data['modelSubKriteria'] = $temp;

		echo view('/peminjam/tambah', $data);
	}

	public function import()
	{
		$id = 0;
		$data['judul'] = 'Import Peminjam';
		$data['url'] = 'peminjam/tambah';
		$data['id'] = $id;

		$data['modelSubKriteria'] = $this->modelSubKriteria
			->findAll();

		$temp = [];
		foreach ($data['modelSubKriteria'] as $key => $value) {
			$temp[$value['id_kriteria']][] = $value['nama_sub_kriteria'];
		}
		// print_r($temp);
		// exit;
		$data['modelSubKriteria'] = $temp;

		echo view('/peminjam/import', $data);
	}

	public function simpanExcel()
	{
		$file_excel = $this->request->getFile('fileexcel');
		$ext = $file_excel->getClientExtension();
		if ($ext == 'xls') {
			$render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		} else {
			$render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet = $render->load($file_excel);

		$data = $spreadsheet->getActiveSheet()->toArray();
		// print_r($data);
		foreach ($data as $x => $row) {
			if ($x == 0) {
				continue;
			}

			// $Nis = $row[0];
			$nama = $row[1];
			$jenis_kelamin = $row[2];
			// $formulir = $row[3];
			$jenis_usaha = $row[3];
			$total_pinjaman = $row[4];
			$periode_pinjaman = $row[5];
			$tunggakan = $row[6];

			if ($nama == null) {
				break;
			}

			$data = [
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				// 'formulir' => $formulir,
				'jenis_usaha' => $jenis_usaha,
				'total_pinjaman' => $total_pinjaman,
				'periode_pinjaman' => $periode_pinjaman,
				'tunggakan' => $tunggakan,
			];

			// print_r($data);
			$this->modelPeminjam->save($data);
			// echo '<br>';
		}


		return $this->index();
	}

	public function insertData()
	{
		$data = [
			'nama' => $this->request->getPost('nama'),
			'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
			'formulir' => $this->request->getPost('formulir'),
			'jenis_usaha' => $this->request->getPost('jenis_usaha'),
			'total_pinjaman' => $this->request->getPost('total_pinjaman'),
			'periode_pinjaman' => $this->request->getPost('periode_pinjaman'),
			'tunggakan' => $this->request->getPost('tunggakan'),
		];

		// print_r($data);

		if (!$this->modelPeminjam->save($data)) {
			return redirect()->back()->withInput()->with('errors', $this->modelPeminjam->errors());
		}
		return redirect()->to(base_url() . '/peminjam');	
	}

	public function ubah()
	{
		$id = $this->req->uri->getSegment(3);
		$data['judul'] = 'Edit Peminjam';
		$data['url'] = 'peminjam/ubah';
		$data['id'] = $id;
		$data['model'] = $this->modelPeminjam
			// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
			->where('id_peminjam', $id)
			->find()[0];

		$data['modelSubKriteria'] = $this->modelSubKriteria
			->findAll();

		$temp = [];
		foreach ($data['modelSubKriteria'] as $key => $value) {
			$temp[$value['id_kriteria']][] = $value['nama_sub_kriteria'];
		}
		$data['modelSubKriteria'] = $temp;

		// print_r($data['model']);exit;

		echo view('peminjam/ubah', $data);
	}

	public function updateData()
	{
		$data = [
			'id_peminjam' => $this->request->getPost('id_peminjam'),
			'nama' => $this->request->getPost('nama'),
			'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
			'formulir' => $this->request->getPost('formulir'),
			'jenis_usaha' => $this->request->getPost('jenis_usaha'),
			'total_pinjaman' => $this->request->getPost('total_pinjaman'),
			'periode_pinjaman' => $this->request->getPost('periode_pinjaman'),
			'tunggakan' => $this->request->getPost('tunggakan'),
		];


		$this->modelPeminjam->save($data);

		// print_r($data);exit;

		return redirect()->to(base_url() . '/peminjam');
	}

	public function delete()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelPeminjam->delete($id);
		return redirect('peminjam');
	}
}
