<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->model('model_mhs');	

		$var['mhs'] = $this->model_mhs->getAll();
		 
		$this->load->view('mahasiswa/v_index', $var);
	}
	public function tambah()
	{
		$this->load->model('model_mhs');	

		$var['mhs'] = $this->model_mhs->getEmpty();
		$var['title'] = 'TAMBAH MAHASISWA';
		$var['aksi'] = 'mahasiswa/tambah_aksi';

		$this->load->view('mahasiswa/v_tambah', $var);
	}
	public function tambah_aksi()
	{
		$this->load->model('model_mhs');

		$input = $this->input->post();
		//var DB 		var v_tambah
		$data['nim'] = $input['nim'];
		$data['nama_mhs'] = $input['nama'];
		$data['jk_mhs'] = $input['jenis'];
		$data['agama_mhs'] = $input['agama'];
		$data['prodi'] = 'PTI';

		$result = $this->model_mhs->insert($data); //kirim data ke model
		if($result){ //berhasil simpan
			redirect('mahasiswa');
		}else{ //gagal simpan
			redirect('mahasiswa/tambah');
		}
	}
	public function ubah($id)
	{
		$this->load->model('model_mhs');	

		$var['mhs'] = $this->model_mhs->getId($id);
		$var['title'] = 'UBAH MAHASISWA';
		$var['aksi'] = 'mahasiswa/ubah_aksi/'. $id;

		$this->load->view('mahasiswa/v_tambah', $var);
	}
	public function ubah_aksi($id)
	{
		$this->load->model('model_mhs');

		$input = $this->input->post();
		//var DB 		var v_tambah
		$data['nim'] = $input['nim'];
		$data['nama_mhs'] = $input['nama'];
		$data['jk_mhs'] = $input['jenis'];
		$data['agama_mhs'] = $input['agama'];
		$data['prodi'] = 'PTI';

		$result = $this->model_mhs->update($id, $data); //kirim data ke model
		if($result){ //berhasil ubah
			redirect('mahasiswa');
		}else{ //gagal ubah
			redirect('mahasiswa/ubah/'. $id); //kembali k form ubah
		}
	}
	public function hapus($id)
	{
		$this->load->model('model_mhs');

		$result = $this->model_mhs->delete($id); //kirim id_mhs ke model u/ di hapus
		if($result){ //berhasil hapus
			redirect('mahasiswa');
		}else{ //gagal hapus
			redirect('mahasiswa');
		}

	}
}
