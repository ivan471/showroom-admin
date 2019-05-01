<?php

class Model_mobil extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	public function tampil(){
    return $this->db->get('tb_mobil');
	}
	public function simpan(){
		$data = [
						'nama' => $this->input->post('nama'),
						'type' => $this->input->post('type'),
						'merk' => $this->input->post('merk'),
						'model' => $this->input->post('model'),
						'warna' => $this->input->post('warna'),
						'harga' => $this->input->post('harga'),
						'tahun' => $this->input->post('tahun'),
						'transmisi' => $this->input->post('transmisi'),
						'no_polisi' => $this->input->post('no_polisi'),
						'kapasitas' => $this->input->post('kapasitas'),
						'bahan_bakar' => $this->input->post('bahan_bakar'),
						'gambar1' => $this->input->post('gambar1'),
						'gambar2' => $this->input->post('gambar2'),
						'gambar3' => $this->input->post('gambar3'),
						'gambar4' => $this->input->post('gambar4'),
						'deskripsi' => $this->input->post('desc'),
						'tanggal_input' => date('Y-m-d'),
						'masa_berlaku_stnk' => $this->input->post('masa_berlaku_stnk')
					];
					// simpan ke database dalam tabel 'blogs'
		$this->db->insert( 'tb_mobil', $data );
		echo "berhasil";
	}
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
}
?>
