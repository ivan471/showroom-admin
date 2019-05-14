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
		$lastdata =  $this->model_mobil->get_last_query();
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		//$data['id']= $this
		$data['querys'] = $lastdata->id;
		if ($this->form_validation->run() == FALSE) {
			$this->load->template('input', $data);
		}
	}
	public function simpan()
	{
		$this->model_mobil->simpan();
		redirect(base_url());
	}
}
