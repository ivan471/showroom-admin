<?php

class Model_mobil extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	public function tampil(){
    return $this->db->get('tb_mobil');
	}
	public function simpan(){

		$link=$this->input->post('merk').'-'.$this->input->post('type').'-'.$this->input->post('id');
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
						'gambar1' => 'https://drive.google.com/uc?export=view&id='.$this->input->post('gambar1'),
						'gambar2' => 'https://drive.google.com/uc?export=view&id='.$this->input->post('gambar2'),
						'gambar3' => 'https://drive.google.com/uc?export=view&id='.$this->input->post('gambar3'),
						'gambar4' => 'https://drive.google.com/uc?export=view&id='.$this->input->post('gambar4'),
						'gambar5' => 'https://drive.google.com/uc?export=view&id='.$this->input->post('gambar5'),
						'gambar6' => 'https://drive.google.com/uc?export=view&id='.$this->input->post('gambar6'),
						'deskripsi' => $this->input->post('desc'),
						'tanggal_input' => date('Y-m-d'),
						'link' => $link,
						'masa_berlaku_stnk' => $this->input->post('masa_berlaku_stnk')
					];
					// simpan ke database dalam tabel 'blogs'
		$this->db->insert( 'tb_mobil', $data );
	}
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
	function get_last_query()
	 {
		 $this->db->order_by('id', 'desc');
		return $this->db->get('tb_mobil')->row();
	 }
}
?>
