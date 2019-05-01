<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


  public function __construct() {
    parent::__construct();

    $this->load->model('model_mobil','person_model');

  }

	public function index()
	{
		$data['tb_mobil']= $this->model_mobil->tampil()->result();
		$this->load->template('utama', $data);
	}
	public function hapus($id){
		$where = array('id' => $id);
		$this->model_mobil->hapus_data($where,'tb_mobil');
		redirect("/");
	}
	function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->model_mobil->edit_data($where,'tb_mobil')->result();
	$this->load->view('v_edit',$data);
}
}
