<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model extends CI_Model {
public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('penjualan');
		$this->db->order_by('no_penjualan','desc');

		$query = $this->db->get();
		return $query->result();

	}
	public function tambah($data)
	{
		$this->db->insert('penjualan', $data);


	}
	public function edit($data)
	{
	$this->db->where('no_penjualan',$data['no_penjualan']);
	$this->db->update('penjualan',$data);
	}
	public function detail($no_penjualan)
	{
		$this->db->select('*');
		$this->db->from('penjualan');
		$this->db->where('no_penjualan', $no_penjualan);
		$this->db->order_by('no_penjualan', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	public function total_jumlah()
	{
	$this->db->select('SUM(total) AS totaljumlah' );
		$this->db->from('penjualan');
		
		
		$query = $this->db->get();
		return $query->row();
	}
	public function berat_jumlah()
	{
	$this->db->select('SUM(jumlah) AS beratjumlah' );
		$this->db->from('penjualan');
		
		
		$query = $this->db->get();
		return $query->row();
	}
	public function total_tahun()
	{
		$tanggal=date('Y');
	$this->db->select('SUM(total) AS totaltahun' );
		$this->db->from('penjualan');
		
		$this->db->where('year(tanggal)', $tanggal);
		$query = $this->db->get();
		return $query->row();
	}
	public function berat_tahun()
	{
		$tanggal=date('Y');
	$this->db->select('SUM(jumlah) AS berattahun' );
		$this->db->from('penjualan');
		
		$this->db->where('year(tanggal)', $tanggal);
		$query = $this->db->get();
		return $query->row();
	}
	public function day()
	{
	
	$this->db->select('SUM(total) AS totalhari' );
		$this->db->from('penjualan');
		
		$this->db->where('tanggal', date("Y-m-d"));
		$query = $this->db->get();
		return $query->row();
	}

	public function total_bulan()
	{
		$tanggal=date('m');
	$this->db->select('SUM(total) AS totalbulan' );
		$this->db->from('penjualan');
		
		$this->db->where('month(tanggal)', $tanggal);
		$query = $this->db->get();
		return $query->row();
	}

	public function total_berat_bulan()
	{
		$tanggal=date('m');
	$this->db->select('SUM(jumlah) AS totalbulan' );
		$this->db->from('penjualan');
		
		$this->db->where('month(tanggal)', $tanggal);
		$query = $this->db->get();
		return $query->row();
	}


	public function rekap_penjualan($tanggal)
	{
		$this->db->select('SUM(total) AS totaljumlah');
		$this->db->from('penjualan');
		
		$this->db->where('tanggal', $tanggal);
		
		$query = $this->db->get();
		return $query->result();
	}

	public function rekap_berat($tanggal)
	{
		$this->db->select('SUM(jumlah) AS totalberat');
		$this->db->from('penjualan');
		
		$this->db->where('tanggal', $tanggal);
		
		$query = $this->db->get();
		return $query->result();
	}



	public function rekap_hari($tanggal)
	{
		$this->db->select('*');
		$this->db->from('penjualan');
		$this->db->where('tanggal', $tanggal);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	public function rekap_hari_berat($tanggal)
	{
		$this->db->select('*');
		$this->db->from('penjualan');
		$this->db->where('tanggal', $tanggal);
		$this->db->order_by('no_penjualan','desc');
		$query = $this->db->get();
		return $query->result();
	}



	public function distinct()
	{
	$this->db->select('distinct (tanggal)' );
		$this->db->from('penjualan');
		$this->db->order_by('no_penjualan','desc');
		$query = $this->db->get();
		return $query->result();
	}


	public function distinct_berat()
	{
	$this->db->select('distinct (berat)' );
		$this->db->from('penjualan');
		$this->db->order_by('no_penjualan','desc');
		$query = $this->db->get();
		return $query->result();
	}




	public function delete($data)
	{

		$this->db->where('no_penjualan', $data['no_penjualan']);
		$this->db->delete('penjualan',$data);
	}
}
	

