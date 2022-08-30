<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function index()
	{
		$this->load->model('model_kelas');

		$var['kelas'] = $this->model_kelas->getAll();

		$this->load->view('kelas/v_index', $var);
	}
	public function tambah()
	{
		$this->load->model('model_kelas');
		$var['kelas'] = $this->model_kelas->getEmpty();
		$var['title'] = 'TAMBAH KELAS';
		$var['aksi'] = 'kelas/tambah_aksi';

		$this->load->view('kelas/v_tambah', $var);
	}
	public function tambah_aksi()
	{
		$this->load->model('model_kelas');

		$input = $this->input->post();
		// var DB       // var v_tambah
		$data['nama_kelas'] = $input['nama'];
		$data['jadwal_kelas'] = $input['jadwal'];
		$data['ruangan_kelas'] = $input['ruangan'];
		$data['matkul_id'] = $input['matkul'];
		$data['dosen_id'] = $input['dosen'];

		$result = $this->model_kelas->insert($data); //
		if($result){  //berhasil disimpan
			redirect('kelas');
		}else{ //gagal simpan
			redirect('kelas/tambah');

		}
	}

	public function ubah($id)
	{
		$this->load->model('model_kelas');

		$var['kelas'] = $this->model_kelas->getId($id);
		$var['title'] = 'UBAH KELAS';
		$var['aksi'] = 'kelas/ubah_aksi/'. $id;

		$this->load->view('kelas/v_tambah', $var);
	}
	public function ubah_aksi($id)
	{
		$this->load->model('model_kelas');

		$input = $this->input->post();
		// var DB       // var v_tambah
		$data['nama_kelas'] = $input['nama'];
		$data['jadwal_kelas'] = $input['jadwal'];
		$data['ruangan_kelas'] = $input['ruangan'];
		$data['matkul_id'] = $input['matkul'];
		$data['dosen_id'] = $input['dosen'];

		$result = $this->model_kelas->update($id,$data); //
		if($result){  //berhasil disimpan
			redirect('kelas');
		}else{ //gagal simpan
			redirect('kelas/ubah/'.$id);
		}
	}
	public function hapus($id)
	{
		$this->load->model('model_kelas');

		$result = $this->model_kelas->delete($id); //
		if($result){  //berhasil disimpan
			redirect('kelas');
		}else{ //gagal simpan
			redirect('kelas');
		}
	}

	

}