<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('user_model');
	$this->load->model('barang_model');
	$this->load->model('stok_model');
	 
}

	public function index()
	{
			
		$user = $this->stok_model->listing();
		$data = array('title' => 'Data Barang',
						'user' => $user,
						'isi'	=> 'admin/pembelian/list'
		 );
			$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//tambah user

	public function tambah(){

		//validasi input
		$valid = $this->form_validation;
		$valid->set_rules('nama_barang', 'Nama barang','required',
			 array('required' => '%s harus diisi'));

		


		if($valid->run()===FALSE){

		$data = array('title' => 'Tambah stok barang',
							'isi' => 'admin/pembelian/tambah' );
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		}else{
			$i = $this->input;
			$data = array('nama_barang'    => $i->post('nama_barang'),
						'harga_barang'    => $i->post('harga_barang'),
						'jumlah_barang'    => $i->post('stok_barang')	
		);
			$this->stok_model->tambah($data);
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('admin/pembelian'),'refresh');



		}}





		//tambah edit

	public function edit($id_user){

		$user= $this->stok_model->detail($id_user);

		//validasi input
		$valid = $this->form_validation;
		$valid->set_rules('nama_barang', 'Nama barang','required',
			 array('required' => 'Nama barang harus diisi'));

	
		if($valid->run()===FALSE){

		$data = array('title' => 'Edit Pengguna',
						'user' => $user,
							'isi' => 'admin/pembelian/edit' );
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		}else{
			$i = $this->input;
			$data = array('id_stok' => $id_user,
				'nama_barang'    => $i->post('nama_barang'),
			'harga_barang'    => $i->post('harga_barang'),
			'jumlah_barang'    => $i->post('jumlah_barang')	
		);
			$this->stok_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah edit');
			redirect(base_url('admin/pembelian'),'refresh');		}}
			// masuk database
		public function delete($id_user)
		{	
			$data = array('id_stok' => $id_user);

			$this->stok_model->delete($data);
			$this->session->set_flashdata('sukses','Data telah dihapus');
			redirect(base_url('admin/pembelian'),'refresh');
	
		}


}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
