<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekapitulasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('rekapitulasi');
		$this->db->order_by('id_rekapitulasi','desc');

		$query = $this->db->get();
		return $query->result();

	}
	public function rekapitulasi_pembelian()
	{
		$tgl_awal 	= $this->input->post('tgl_awal'); //getting from post value
		$tgl_akhir 	= $this->input->post('tgl_akhir'); //getting from post value
	
		$this->db->select('SUM(total) AS totaljumlah');
		$this->db->from('pembelian');
		
		$this->db->where('tanggal >=', $tgl_awal.' 00:00:00');
		$this->db->where('tanggal <=', $tgl_akhir.' 23:59:59');
	
		
		$query = $this->db->get();
		return $query->row();
	}
	public function rekapitulasi_penjualan()
	{
		$tgl_awal 	= $this->input->post('tgl_awal'); //getting from post value
		$tgl_akhir 	= $this->input->post('tgl_akhir'); //getting from post value
	
		$this->db->select('SUM(total) AS totaljumlah');
		$this->db->from('penjualan');
		
		$this->db->where('tanggal >=', $tgl_awal.' 00:00:00');
		$this->db->where('tanggal <=', $tgl_akhir.' 23:59:59');
	
		
		$query = $this->db->get();
		return $query->row();
	}
	public function tambah($data)
	{
		$this->db->insert('rekapitulasi', $data);


	}


	public function total_modal(){
		$this->db->select('SUM(jumlah_dana) AS totalinvestor');
		$this->db->from('investor');
		
	
	
		
		$query = $this->db->get();
		return $query->row();
	}
	public function delete($data)
	{

		$this->db->where('id_rekapitulasi', $data['id_rekapitulasi']);
		$this->db->delete('rekapitulasi',$data);
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
