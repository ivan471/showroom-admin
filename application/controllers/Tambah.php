<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

	public function __construct() {
    parent::__construct();

    $this->load->model('model_mobil');

  }
	public function index()
	{
		$this->load->template('input');
	}
	public function simpan()
	{
		$this->model_mobil->simpan();
	}
}
