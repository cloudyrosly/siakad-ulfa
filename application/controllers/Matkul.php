<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Controller {

	public function index()
	{
		$this->load->model('model_matkul');	

		$var['matkul'] = $this->model_matkul->getAll();
		 
		$this->load->view('matkul/v_index', $var);
	}
	public function tambah()
	{
		$this->load->model('model_matkul');	

		$var['matkul'] = $this->model_matkul->getEmpty();
		$var['title'] = 'TAMBAH MATKUL';
		$var['aksi'] = 'matkul/tambah_aksi';

		$this->load->view('matkul/v_tambah', $var);
	}
	public function tambah_aksi()
	{
		$this->load->model('model_matkul');

		$input = $this->input->post();
		//var DB 		var v_tambah
		$data['nama'] = $input['nama'];
		$data['kode'] = $input['kode'];
		$data['sks'] = $input['sks'];

		$result = $this->model_matkul->insert($data); //kirim data ke model
		if($result){ //berhasil simpan
			redirect('matkul');
		}else{ //gagal simpan
			redirect('matkul/tambah');
		}
	}
	public function ubah($id)
	{
		$this->load->model('model_matkul');	

		$var['matkul'] = $this->model_matkul->getId($id);
		$var['title'] = 'UBAH matkul';
		$var['aksi'] = 'matkul/ubah_aksi/' . $id;

		$this->load->view('matkul/v_tambah', $var);
	}
	public function ubah_aksi($id)
	{
		$this->load->model('model_matkul');

		$input = $this->input->post();
		//var DB 		var v_tambah
		$data['nama'] = $input['nama'];
		$data['kode'] = $input['kode'];
		$data['sks'] = $input['sks'];
		
		$result = $this->model_matkul->update($id, $data); //kirim data ke model
		if($result){ //berhasil ubah
			redirect('matkul');
		}else{ //gagal ubah
			redirect('matkul/ubah/' . $id); //kembali k form ubah
		}
	}
	public function hapus($id)
	{
		$this->load->model('model_matkul');

		$result = $this->model_matkul->delete($id); //kirim id_mhs ke model u/ di hapus
		if($result){ //berhasil hapus
			redirect('matkul');
		}else{ //gagal hapus
			redirect('matkul');
		}
	}
}
