
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investor_model extends CI_Model {
public function __construct()
	{
		parent::__construct();
		$this->load->database();
    }
    
    public function listing()
	{
		$this->db->select('*');
		$this->db->from('investor');
		$this->db->order_by('id_investor','desc');

		$query = $this->db->get();
		return $query->result();

    }
    
    public function edit_investor($data){

		$this->db->where('id_investor',$data['id_investor']);
		$this->db->update('investor',$data);
	}
	public function tambah($data)
	{
		$this->db->insert('investor', $data);


	}

	public function delete($data)
	{

		$this->db->where('id_investor', $data['id_investor']);
		$this->db->delete('investor',$data);
	}
}