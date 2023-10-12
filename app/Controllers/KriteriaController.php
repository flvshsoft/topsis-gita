<?php
namespace App\Controllers;


use CodeIgniter\Controller;

class KriteriaController extends BaseController
{


	public function index()
	{
		$data['user'] = $this->modelKriteria
		// ->join('pegawai', 'pegawai.id_user=user.id_user', 'left')
		->findAll();

		echo view('/kriteria/index', $data); 

	}

	public function tambah()
	{
    	$id = 0;
		$data['judul'] = 'Tambah Kriteria';
		$data['url'] = 'kriteria/tambah';
		$data['id'] = $id;

		echo view('/kriteria/tambah', $data);
	}

	public function insertData()
	{

		$data = [
			'nama_kriteria' => $this->request->getPost('nama_kriteria'),
			'bobot' => $this->request->getPost('bobot'),						
		];

		if (!$this->modelKriteria->save($data)) {
			return redirect()->back()->withInput()->with('errors', $this->modelKriteria->errors());
		}

		return $this->index();
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);
		$data['judul'] = 'Edit Kriteria';
		$data['url'] = 'kriteria/ubah';
		$data['id'] = $id;
		$data['model'] = $this->modelKriteria
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where('id_kriteria', $id)
		->find()[0];

		// print_r($data['model']);exit;
		
		echo view('kriteria/ubah', $data);	
	}

	public function updateData()
	{
		$data = array(
			'id_kriteria'=> $this->request->getPost('id_kriteria'),            
            'nama_kriteria'=> $this->request->getPost('nama_kriteria'),
            'bobot'=> $this->request->getPost('bobot'),
         
        );
		
        
        $this->modelKriteria->save($data);

        // print_r($data);exit;

        return redirect()->to(base_url().'/kriteria');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelKriteria->delete($id);
        return redirect('kriteria');
	}
}
