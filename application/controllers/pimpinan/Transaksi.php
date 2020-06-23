<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('user_model');
	$this->load->model('barang_model');
	$this->load->model('stok_model');
	 $this->load->model('transaksi_model');
	 
}

	public function index()
	{
			
		$user = $this->transaksi_model->listing();
		$data = array('title' => 'Data Transaksi',
						'user' => $user,
						'isi'	=> 'pimpinan/transaksi/list'
		 );
			$this->load->view('pimpinan/layout/wrapper', $data, FALSE);
	}

	//tambah user

	public function tambah(){

		//validasi input
		$valid = $this->form_validation;
		$valid->set_rules('kode_transaksi', 'Nama barang','required',
			 array('required' => '%s harus diisi'));

		


		if($valid->run()===FALSE){

		$data = array('title' => 'Tambah stok barang',
							'isi' => 'pimpinan/transaksi/tambah' );
			$this->load->view('pimpinan/layout/wrapper', $data, FALSE);
		}else{
			$i = $this->input;
			$data = array('kode_transaksi'    => $i->post('kode_transaksi'),
						'tanggal'    => date('Y-m-d')
		);
			$this->transaksi_model->tambah($data);
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('pimpinan/transaksi'),'refresh');



		}}


		public function keranjang($id_transaksi){
			
			//validasi input
			$barang = $this->barang_model->listing();
			$valid = $this->form_validation;
			$valid->set_rules('no_transaksi', 'Nama barang','required',
				 array('required' => '%s harus diisi'));
	
			
	
	
			if($valid->run()===FALSE){
	
			$data = array('title' => 'Tambah keranjang barang',
							'id' => $id_transaksi,
							'barang' => $barang,	
								'isi' => 'pimpinan/transaksi/keranjang' );
				$this->load->view('pimpinan/layout/wrapper', $data, FALSE);
			}else{
				$i = $this->input;
				$user= $this->barang_model->detail($i->post('no_barang'));

				$total = $user->harga * $i->post('jumlah');
				$data = array('no_transaksi'    => $i->post('no_transaksi'),
				'jumlah'    => $i->post('jumlah'),
				'nama_barang'    => $user->nama,
				'harga'    => $user->harga,
				'total'    => $total,
				'no_barang'    => $i->post('no_barang')
			);
				$this->transaksi_model->keranjang($data);
				$this->session->set_flashdata('sukses','Data telah ditambah');
				redirect(base_url('pimpinan/transaksi'),'refresh');
	
	
	
			}}



		//tambah edit

	public function edit($id_user){

		$user= $this->transaksi_model->detail($id_user);

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
							'isi' => 'pimpinan/user/edit' );
			$this->load->view('pimpinan/layout/wrapper', $data, FALSE);
		}else{
			$i = $this->input;
			$data = array(
								'id_user' => $id_user,
						'nama'    => $i->post('nama')	
		);
			$this->transaksi_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah edit');
			redirect(base_url('pimpinan/user'),'refresh');		}}
			// masuk database
		public function delete($id_user)
		{	
			$data = array('id_transaksi' => $id_user);

			$this->transaksi_model->delete($data);
			$this->session->set_flashdata('sukses','Data telah dihapus');
			redirect(base_url('pimpinan/transaksi'),'refresh');
	
		}
		public function delete_keranjang($id_user)
		{	
			$data = array('id_keranjang' => $id_user);

			$this->transaksi_model->delete_keranjang($data);
			$this->session->set_flashdata('sukses','Data telah dihapus');
			redirect(base_url('pimpinan/transaksi'),'refresh');
	
		}

		
public function cetak(){
    $user = $this->transaksi_model->listing();

   // $tgl_awal = $this->input->post('tgl_awal');
   // $tgl_akhir = $this->input->post('tgl_akhir');
   
   $data = array('title' => 'Data Laporan', 
       
   
               'user' =>  $user 
                            );
                            $mpdf = new \Mpdf\Mpdf();
                            $mpdf->SetHTMLHeader('
                <div style="text-align: left; font-weight: bold;">
                   <img src="'.base_url('assets/upload/image/').'" style="height:50px; width=auto;">
                </div>');
                $mpdf->SetHTMLFooter('
                    <div style=" 10px 20px; background-color: black; color: white; font-size: 12px; ">
                   
                        
                    </div>
                ');
                // Wr
   // Write some HTML code:
           $html = $this->load->view('pimpinan/laporan_penjualan/cetak', $data, true);
   
   
   $mpdf->WriteHTML($html);
   
   // Outputtampil dengan nama baru
   $nama_file_pdf = url_title(laporan, 'dash', 'true').'.pdf';
   $mpdf->Output($nama_file_pdf, 'I');
       }

}

/* End of file User.php */
/* Location: ./application/controllers/pimpinan/User.php */
