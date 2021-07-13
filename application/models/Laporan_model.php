<?php 


class Laporan_model extends CI_model
{
	public function getAllPembayaran()
	{
		return $this->db->get('pembayaran')->result_array();
	}

	public function getAllPemesanan()
	{
		return $this->db->get('pemesanan')->result_array();
	}

	public function hapusPemesananById($id)
	{
		$this->db->delete('pemesanan', ['id' => $id]);
	} 

	public function getPemesananById($id)
	{
		return $this->db->get_where('pemesanan', ['id' => $id])->row_array();
	}	

	public function ubahPemesanan()
	{
		$data = [
			"nama_buku" => $this->input->post('nama_buku', true),
			"nama_penulis" => $this->input->post('nama_penulis', true),
			"jenjang_buku" => $this->input->post('jenjang_buku', true),
			"jumlah_pesanan" => $this->input->post('jumlah_pesanan', true),
			"alamat_kantor" => $this->input->post('alamat_kantor', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pemesanan', $data);
	}
}