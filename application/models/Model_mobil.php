<?php

class Model_mobil extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	public function simpan(){
		$data = [
						'id' => $this->input->post('nama'),
						'nama' => $this->input->post('nama'),
						'type' => $this->input->post('type'),
						'merk' => $this->input->post('merk'),
						'warna' => $this->input->post('warna'),
						'harga' => $this->input->post('harga'),
						'tahun' => $this->input->post('tahun'),
						'transmisi' => $this->input->post('transmisi'),
						'no_polisi' => $this->input->post('no_polisi'),
						'kapasitas' => $this->input->post('kapasitas'),
						'bahan_bakar' => $this->input->post('bahan_bakar'),
						'tanggal_input' => date('Y-m-d H:i:s'),
						'masa_berlaku_stnk' => $this->input->post('masa_berlaku')
					];
					// simpan ke database dalam tabel 'blogs'
		$this->db->insert( 'tb_mobil', $data );
		echo "masa_berlaku_stnk";
	}
}
?>
