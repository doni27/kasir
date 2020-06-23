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
	}
	public function index()
	{
		$user = $this->pembelian_model->listing();
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
				
			
				
						'isi' => 'admin/dasbor/list' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */