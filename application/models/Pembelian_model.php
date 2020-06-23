<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_model extends CI_Model {
public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('pembelian');
		$this->db->order_by('no_pembelian','desc');

		$query = $this->db->get();
		return $query->result();

	}
	public function tambah($data)
	{
		$this->db->insert('pembelian', $data);


	}
	public function edit($data)
	{
	$this->db->where('no_pembelian',$data['no_pembelian']);
	$this->db->update('pembelian',$data);
	}
	public function detail($no_pembelian)
	{
		$this->db->select('*');
		$this->db->from('pembelian');
		$this->db->where('no_pembelian', $no_pembelian);
		$this->db->order_by('no_pembelian', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	public function total_jumlah()
	{
	$this->db->select('SUM(total) AS totaljumlah' );
		$this->db->from('pembelian');
		
		
		$query = $this->db->get();
		return $query->row();
	}
	public function berat_jumlah()
	{
	$this->db->select('SUM(jumlah) AS beratjumlah' );
		$this->db->from('pembelian');
		
		
		$query = $this->db->get();
		return $query->row();
	}
	public function total_tahun()
	{
		$tanggal=date('Y');
	$this->db->select('SUM(total) AS totaltahun' );
		$this->db->from('pembelian');
		
		$this->db->where('year(tanggal)', $tanggal);
		$query = $this->db->get();
		return $query->row();
	}
	public function berat_tahun()
	{
		$tanggal=date('Y');
	$this->db->select('SUM(jumlah) AS berattahun' );
		$this->db->from('pembelian');
		
		$this->db->where('year(tanggal)', $tanggal);
		$query = $this->db->get();
		return $query->row();
	}
	public function day()
	{
	
	$this->db->select('SUM(total) AS totalhari' );
		$this->db->from('pembelian');
		
		$this->db->where('tanggal', date("Y-m-d"));
		$query = $this->db->get();
		return $query->row();
	}

	public function total_bulan()
	{
		$tanggal=date('m');
	$this->db->select('SUM(total) AS totalbulan' );
		$this->db->from('pembelian');
		
		$this->db->where('month(tanggal)', $tanggal);
		$query = $this->db->get();
		return $query->row();
	}

	public function total_berat_bulan()
	{
		$tanggal=date('m');
	$this->db->select('SUM(jumlah) AS totalbulan' );
		$this->db->from('pembelian');
		
		$this->db->where('month(tanggal)', $tanggal);
		$query = $this->db->get();
		return $query->row();
	}


	public function rekap_pembelian($tanggal)
	{
		$this->db->select('SUM(total) AS totaljumlah');
		$this->db->from('pembelian');
		
		$this->db->where('tanggal', $tanggal);
		
		$query = $this->db->get();
		return $query->result();
	}

	public function rekap_berat($tanggal)
	{
		$this->db->select('SUM(jumlah) AS totalberat');
		$this->db->from('pembelian');
		
		$this->db->where('tanggal', $tanggal);
		
		$query = $this->db->get();
		return $query->result();
	}



	public function rekap_hari($tanggal)
	{
		$this->db->select('*');
		$this->db->from('pembelian');
		$this->db->where('tanggal', $tanggal);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	public function rekap_hari_berat($tanggal)
	{
		$this->db->select('*');
		$this->db->from('pembelian');
		$this->db->where('tanggal', $tanggal);
		$this->db->order_by('no_pembelian','desc');
		$query = $this->db->get();
		return $query->result();
	}



	public function distinct()
	{
	$this->db->select('distinct (tanggal)' );
		$this->db->from('pembelian');
		$this->db->order_by('no_pembelian','desc');
		$query = $this->db->get();
		return $query->result();
	}


	public function distinct_berat()
	{
	$this->db->select('distinct (berat)' );
		$this->db->from('pembelian');
		$this->db->order_by('no_pembelian','desc');
		$query = $this->db->get();
		return $query->result();
	}




	public function delete($data)
	{

		$this->db->where('no_pembelian', $data['no_pembelian']);
		$this->db->delete('pembelian',$data);
	}
}
	

