
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {
public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


  public function get_data_penjualan_periode()
	{
		$tgl_awal 	= $this->input->post('tgl_awal'); //getting from post value
    $tgl_akhir 	= $this->input->post('tgl_akhir'); //getting from post value

  

        $this->db->select('*');
        $this->db->from('pembelian');
        $this->db->where('tanggal >=', $tgl_awal.' 00:00:00');
		$this->db->where('tanggal <=', $tgl_akhir.' 23:59:59');
	
		$this->db->order_by('no_pembelian','desc');

		$query = $this->db->get();
		return $query->result();
	}
	public function get_data_penjualan_periode_penjualan()
	{
		$tgl_awal 	= $this->input->post('tgl_awal'); //getting from post value
    $tgl_akhir 	= $this->input->post('tgl_akhir'); //getting from post value

    //$this->db->join('users', 'transaksi.user_id = users.id');
		// $this->db->where('created >=', $tgl_awal.' 00:00:00');
		// $this->db->where('created <=', $tgl_akhir.' 23:59:59');
		// return $this->db->get($this->table)->result();



        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->where('tanggal >=', $tgl_awal.' 00:00:00');
		$this->db->where('tanggal <=', $tgl_akhir.' 23:59:59');
	
		$this->db->order_by('no_penjualan','desc');

		$query = $this->db->get();
		return $query->result();
  }



	


	
  public function get_data_rekap_pembelian_periode()
	{
		$tgl_awal 	= $this->input->post('tgl_awal'); //getting from post value
    $tgl_akhir 	= $this->input->post('tgl_akhir'); //getting from post value

    //$this->db->join('users', 'transaksi.user_id = users.id');
		// $this->db->where('created >=', $tgl_awal.' 00:00:00');
		// $this->db->where('created <=', $tgl_akhir.' 23:59:59');
		// return $this->db->get($this->table)->result();



		$this->db->select('distinct (tanggal)' );
		$this->db->from('pembelian');
		 $this->db->where('tanggal >=', $tgl_awal.' 00:00:00');
		$this->db->where('tanggal <=', $tgl_akhir.' 23:59:59');
	
		$this->db->order_by('no_pembelian','desc');

		$query = $this->db->get();
		return $query->result();
	}

	

	public function get_data_rekap_penjualan_periode()
	{
		$tgl_awal 	= $this->input->post('tgl_awal'); //getting from post value
    $tgl_akhir 	= $this->input->post('tgl_akhir'); //getting from post value

    //$this->db->join('users', 'transaksi.user_id = users.id');
		// $this->db->where('created >=', $tgl_awal.' 00:00:00');
		// $this->db->where('created <=', $tgl_akhir.' 23:59:59');
		// return $this->db->get($this->table)->result();



		$this->db->select('distinct (tanggal)' );
		$this->db->from('penjualan');
		 $this->db->where('tanggal >=', $tgl_awal.' 00:00:00');
		$this->db->where('tanggal <=', $tgl_akhir.' 23:59:59');
	
		$this->db->order_by('no_penjualan','desc');

		$query = $this->db->get();
		return $query->result();
	}
}