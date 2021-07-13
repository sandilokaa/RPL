<?php 

class Pay_model extends CI_Model{

	public function getAllPembayaran()
	{
		return $this->db->get('pembayaran')->result_array();
	}

	public function bayarBuku()
	{
		$data = [
			"invoice" => $this->input->post('invoice', true),
			"nomor_rekening" => $this->input->post('nomor_rekening', true),
			"tanggal_pembayaran" => $this->input->post('tanggal_pembayaran', true),
			"total_harga" => $this->input->post('total_harga', true)
		];

		$this->db->insert('pembayaran', $data);
	}
}