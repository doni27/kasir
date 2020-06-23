<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('user_model');
	$this->load->model('barang_model');

	 
}

	public function index()
	{
			
		$user = $this->barang_model->listing();
		$data = array('title' => 'Data Barang',
						'user' => $user,
						'isi'	=> 'admin/barang/list'
		 );
			$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//tambah user

	public function tambah(){

		//validasi input
		$valid = $this->form_validation;
		$valid->set_rules('nama', 'Nama barang','required',
			 array('required' => '%s harus diisi'));

		


		if($valid->run()===FALSE){

		$data = array('title' => 'Tambah barang',
							'isi' => 'admin/barang/tambah' );
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		}else{
			$i = $this->input;
			$data = array('nama'    => $i->post('nama'),
						'harga'    => $i->post('harga'),
						'stok'    => $i->post('stok')	
		);
			$this->barang_model->tambah($data);
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('admin/barang'),'refresh');



		}}





		//tambah edit

	public function edit($id_user){

		$user= $this->user_model->detail($id_user);

		//validasi input
		$valid = $this->form_validation;
		$valid->set_rules('nama', 'Nama Lengkap','required',
			 array('required' => '%s harus diisi'));

		$valid->set_rules('email','Email','required|valid_email',
			array('required' => '$s harus di isi',
					'valid_email' => '$s tidak valid'));
			  





		if($valid->run()===FALSE){

		$data = array('title' => 'Edit Pengguna',
						'user' => $user,
							'isi' => 'admin/user/edit' );
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		}else{
			$i = $this->input;
			$data = array(
								'id_user' => $id_user,
						'nama'    => $i->post('nama')	
		);
			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah edit');
			redirect(base_url('admin/user'),'refresh');		}}
			// masuk database
		public function delete($id_user)
		{	
			$data = array('id_user' => $id_user);

			$this->user_model->delete($data);
			$this->session->set_flashdata('sukses','Data telah dihapus');
			redirect(base_url('admin/user'),'refresh');
	
		}


}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
