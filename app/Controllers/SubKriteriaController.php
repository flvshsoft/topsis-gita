<?php
namespace App\Controllers;


use CodeIgniter\Controller;

class SubKriteriaController extends BaseController
{


	public function index()
	{
		$data['model'] = $this->modelSubKriteria
		->select('*, sub_kriteria.bobot as bobot')
		->join('kriteria', 'kriteria.id_kriteria=sub_kriteria.id_kriteria', 'left')
		->findAll();

		echo view('/sub_kriteria/index', $data); 

	}

	public function tambah()
	{
    	$id = 0;
		$data['judul'] = 'Tambah Sub Kriteria';
		$data['url'] = 'sub-kriteria/tambah';
		$data['id'] = $id;
		$data['modelKriteria'] = $this->modelKriteria
		->orderBy('nama_kriteria')
		->findAll();

		echo view('/sub_kriteria/tambah', $data);
	}

	public function insertData()
	{
		$data = [
			'id_kriteria' => $this->request->getPost('id_kriteria'),
			'nama_sub_kriteria' => $this->request->getPost('nama_sub_kriteria'),	
			'bobot' => $this->request->getPost('bobot'),						
		];
		// print_r($data);
		// exit;

		if (!$this->modelSubKriteria->save($data)) {
			return redirect()->back()->withInput()->with('errors', $this->modelSubKriteria->errors());
		}

		return $this->index();
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);
		$data['judul'] = 'Edit Sub Kriteria';
		$data['url'] = 'sub-kriteria/ubah';
		$data['id'] = $id;
		$data['model'] = $this->modelSubKriteria
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where('id_sub_kriteria', $id)
		->find()[0];

		
		$data['modelKriteria'] = $this->modelKriteria
		->orderBy('nama_kriteria')
		->findAll();

		$kriteria = [];
		foreach ($data['modelKriteria'] as $key => $value) {
			$kriteria[$value['id_kriteria']] = $value;
		}
		$data['modelKriteria'] = $kriteria;

		// print_r($data['modelKriteria']);exit;
		
		echo view('sub_kriteria/ubah', $data);	
	}

	public function updateData()
	{
		
		$data = [
			'id_sub_kriteria' => $this->request->getPost('id_sub_kriteria'),
			'id_kriteria' => $this->request->getPost('id_kriteria'),
			'nama_sub_kriteria' => $this->request->getPost('nama_sub_kriteria'),	
			'bobot' => $this->request->getPost('bobot'),						
		];
		
        
        $this->modelSubKriteria->save($data);

        // print_r($data);exit;

        return redirect()->to(base_url().'/sub-kriteria');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelSubKriteria->delete($id);
        return redirect('sub-kriteria');
    	
	}
}
