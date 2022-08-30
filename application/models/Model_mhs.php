<?php 

class Model_mhs extends CI_Model {
	var $table = 'tb_mhs';
	var $id = 'id_mhs';

	function getAll() { // ambil semua data
		$this->db->from($this->table); // 4 data

		$result = $this->db->get(); // tampung data di variabel

		return $result->result_array(); // kembalikan data ke controller
	}
	function getId($id = null){ //ambil berdasarkan id
		$this->db->from($this->table);
		$this->db->where($this->id, $id);
		$result = $this->db->get();

		return $result->row_array(); // row utk 1 baris saja
	}

	function insert($data) {
		$this->db->set($this->id, 'UUID()', false); //set id_mhs otomatis
		$result = $this->db->insert($this->table,$data);
		return $result;
	}

	function update($id, $data) {
		$this->db->where($this->id, $id); // copy dari getID
		$result = $this->db->update($this->table, $data);
		return $result;
	}
	function delete($id) {
		$this->db->where($this->id, $id); // copy dari getID
		$result = $this->db->delete($this->table);
		return $result;
	}
	function getEmpty(){
		$var['id_mhs'] = null;
		$var['nim'] = null;
		$var['nama_mhs'] = null;
		$var['jk_mhs'] = null;
		$var['agama_mhs'] = null;
		$var['prodi'] = null;

		return $var;
	}

}

 ?>