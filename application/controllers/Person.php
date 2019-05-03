<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('person_model','person');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->template('utama');
	}

	public function ajax_list()
	{
		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->nama;
			$row[] = $person->merk;
			$row[] = $person->tahun;
			$row[] = $person->model;
			$row[] = $person->warna;
			$row[] = $person->type;
			$row[] = $person->no_polisi;
			$row[] = $person->transmisi;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="fas fa-pen"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="fas fa-trash"></i> Delete</a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->person->count_all(),
						"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->person->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		$data = array(
				'firstName' => $this->input->post('nama'),
				'lastName' => $this->input->post('merk'),
				'gender' => $this->input->post('tahun'),
				'address' => $this->input->post('warna'),
			);
		$insert = $this->person->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'nama' => $this->input->post('nama'),
				'merk' => $this->input->post('merk'),
				'tahun' => $this->input->post('tahun'),
				'model' => $this->input->post('model'),
				'warna' => $this->input->post('warna'),
				'type' => $this->input->post('type'),
				'no_polisi' => $this->input->post('no_polisi'),
				'transmisi' => $this->input->post('transmisi'),
				'bahan_bakar' => $this->input->post('bahan_bakar'),
				'harga' => $this->input->post('harga'),
				'masa_berlaku_stnk' => $this->input->post('masa_berlaku_stnk'),
				'kapasitas' => $this->input->post('kapasitas'),
				'gambar1' => $this->input->post('gambar1'),
				'gambar2' => $this->input->post('gambar2'),
				'gambar3' => $this->input->post('gambar3'),
				'gambar4' => $this->input->post('gambar4'),
				'deskripsi' => $this->input->post('deskripsi'),
			);
		$this->person->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}


	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nama') == '')
		{
			$data['inputerror'][] = 'nama';
			$data['error_string'][] = 'Name harus diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('merk') == '')
		{
			$data['inputerror'][] = 'merk';
			$data['error_string'][] = 'Merk harus diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('tahun') == '')
		{
			$data['inputerror'][] = 'tahun';
			$data['error_string'][] = 'Tahun harus diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('warna') == '')
		{
			$data['inputerror'][] = 'warna';
			$data['error_string'][] = 'Warna harus diisi';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

}
