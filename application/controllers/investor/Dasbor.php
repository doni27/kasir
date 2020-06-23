<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pembelian_model');
		$this->load->model('penjualan_model');
		$this->load->helper('countdown');
		$this->load->helper('tgl_indonesia');
		$this->load->model('barang_model');
		$this->load->model('transaksi_model');
	}
	public function index()
	{
	$user = $this->transaksi_model->listing();
	$total = $this->pembelian_model->total_jumlah();
	$berattotal = $this->pembelian_model->berat_jumlah();
	$bulan = $this->pembelian_model->total_bulan();
	$dayy= $this->pembelian_model->day();
	$tahun = $this->pembelian_model->total_tahun();
	$berattahun = $this->pembelian_model->berat_tahun();
	$distinct = $this->pembelian_model->distinct();
	
	$bulan_bulan = $this->pembelian_model->total_berat_bulan();
	$data = array('title' => 'Beranda',
					'user' => $user,
					'total' => $total,
					'bulan' => $bulan,
					'bulan_bulan' => $bulan_bulan,
					'tahun' => $tahun,
					'berattahun' => $berattahun,
					'berattotal' => $berattotal,
					'distinct' => $distinct,
				
			
				
						'isi' => 'investor/beranda/list' );
		$this->load->view('investor/layout/wrapper', $data, FALSE);
	}
	public function tambah(){
		$barang = $this->barang_model->listing();
		//validasi input
		$valid = $this->form_validation;
		$valid->set_rules('id_barang', 'Nama barang','required',
			 array('required' => '%s harus diisi'));

		


		if($valid->run()===FALSE){

		$data = array('title' => 'Tambah barang',
		'barang' => $barang,

							'isi' => 'investor/beranda/tambah' );
			$this->load->view('investor/layout/wrapper', $data, FALSE);
		}else{
			$i = $this->input;
			$data = array('id_barang'    => $i->post('id_barang'),
						'jumlah_barang'    => $i->post('jumlah_barang')
		);
			$this->transaksi_model->tambah($data);
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('investor/dasbor'),'refresh');



		}}

}

/* End of file Mitra.php */
/* Location: ./application/controllers/admin/Mitra.php */
