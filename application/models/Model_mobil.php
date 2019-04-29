<?php

class Model_mobil extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	public function simpan(){
		$data = [
						'id' => $this->input->post("000001"),
						'nama' => $this->input->post('nama'),
						'type' => $this->input->post('type'),
						'tanggal_input' => date('Y-m-d H:i:s')
					];
					// simpan ke database dalam tabel 'blogs'
		$this->db->insert( 'tb_mobil', $data );
	}
}
?>
