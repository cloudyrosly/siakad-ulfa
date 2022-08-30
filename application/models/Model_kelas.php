<?php 

class Model_kelas extends CI_Model {
	var $table = 'tb_kelas';
	var $id = 'id_kelas';

	function getAll() {
		$this->db->from($this->table);

		$result = $this->db->get();
		return $result->result_array();
	}

	function getId ($id) { //ambil berdasarkan id
		$this->db->from($this->table);
		$this->db->where($this->id, $id);

		$result = $this->db->get();
		return $result->row_array();
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
		$var['id_kelas'] = null;
		$var['nama_kelas'] = null;
		$var['jadwal_kelas'] = null;
		$var['ruangan_kelas'] = null;
		$var['matkul_id'] = null;
		$var['dosen_id'] = null;

		return $var;
	}
}