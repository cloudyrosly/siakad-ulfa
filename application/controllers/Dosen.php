<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
		$this->load->model('model_dosen');

		$var['dosen'] = $this->model_dosen->getAll();

		$this->load->view('dosen/v_index', $var);
	}
	public function tambah()
	{
		$this->load->model('model_dosen');

		$var['dosen'] = $this->model_dosen->getEmpty();
		$var['title']='TAMBAH DOSEN';
		$var['aksi']='dosen/tambah_aksi';

		$this->load->view('dosen/v_tambah', $var);
	}

	public function tambah_aksi()
	{
		$this->load->model('model_dosen');

		$input = $this->input->post();
		// var DB       // var v_tambah
		$data['nidn'] = $input['nidn'];
		$data['nama_dosen'] = $input['nama'];
		$data['jk_dosen'] = $input['jenis'];
		$data['prodi'] = 'PTI';

		$result = $this->model_dosen->insert($data); //
		if($result){  //berhasil disimpan
			redirect('dosen');
		}else{ //gagal simpan
			redirect('dosen/tambah');

		}
	}
	public function ubah($id)
	{
		$this->load->model('model_dosen');

		$var['dosen'] = $this->model_dosen->getId($id);
		$var['title']='UBAH DOSEN';
		$var['aksi']='dosen/ubah_aksi/'. $id;
		$this->load->view('dosen/v_tambah', $var);
	}

	public function ubah_aksi($id)
	{
		$this->load->model('model_dosen');

		$input = $this->input->post();
		// var DB       // var v_tambah
		$data['nidn'] = $input['nidn'];
		$data['nama_dosen'] = $input['nama'];
		$data['jk_dosen'] = $input['jenis'];
		$data['prodi'] = 'PTI';

		$result = $this->model_dosen->update($id,$data); //
		if($result){  //berhasil disimpan
			redirect('dosen');
		}else{ //gagal simpan
			redirect('dosen/ubah/'. $id);

		}
	}

	public function hapus($id)
	{
		$this->load->model('model_dosen');

			$result = $this->model_dosen->delete($id); //kirim id_mhs ke model utk dihapus
		if($result){  //berhasil hapus
			redirect('dosen');
		}else{ //gagal hapus
			redirect('dosen');
		}
	}
	
}
