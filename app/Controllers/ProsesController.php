<?php

namespace App\Controllers;


use CodeIgniter\Controller;

class ProsesController extends BaseController
{
	public function index()
	{
		$data['model'] = $this->modelPeminjam
			// ->join('pegawai', 'pegawai.id_user=user.id_user', 'left')
			->findAll();

		$data['modelKriteria'] = $this->modelKriteria
			->findAll();

		$modelSubKriteria = $this->modelSubKriteria
			->findAll();

		$subList = [];
		foreach ($modelSubKriteria as $key => $value) {
			// echo $value['nama_sub_kriteria'].' - '.$value['bobot'];
			$subList[$value['id_kriteria']][$value['nama_sub_kriteria']] = $value['bobot'];
			// echo '<br>';
		}
		// print_r($subList);
		// exit;
		$data['modelSubKriteria'] = $subList;

		echo view('/proses/index', $data);
	}
}
