<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

	public function __construct() {
    parent::__construct();

    $this->load->model('model_mobil');
		   $this->load->library('form_validation');
  }
	public function index()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->template('input');
		}else {
			redirect(base_url());
		}
	}
	public function simpan()
	{
		$this->model_mobil->simpan();
	}
}
