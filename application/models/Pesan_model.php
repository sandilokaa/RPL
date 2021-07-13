<?php

class Pesan_model extends CI_Model{

	public function getAllPemesanan(){
		return $this->db->get('pemesanan')->result_array();
	}

	public function pesanBuku(){

		$data = [
			"nama_buku" => $this->input->post('nama_buku', true),
			"nama_penulis" => $this->input->post('nama_penulis', true),
			"jenjang_buku" => $this->input->post('jenjang_buku', true),
			"jumlah_pesanan" => $this->input->post('jumlah_pesanan', true),
			"alamat_kantor" => $this->input->post('alamat_kantor', true),
		];

		$this->db->insert('pemesanan', $data);
	}
}