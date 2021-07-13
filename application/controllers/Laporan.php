<?php

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Oenta Web';
        $data['pembayaran'] = $this->Laporan_model->getAllPembayaran();
        $data['pemesanan'] = $this->Laporan_model->getAllPemesanan();
        $this->load->view('templates2/header', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates2/footer');
    }

    public function hapus($id)
    {
        $this->Laporan_model->hapusPemesananById($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pesan');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pemesanan';
        $data['pemesanan'] = $this->Laporan_model->getPemesananById($id);

        $this->form_validation->set_rules('nama_buku', 'Nama Buku', 'required');
        $this->form_validation->set_rules('nama_penulis', 'Nama Penulis', 'required');
        $this->form_validation->set_rules('jenjang_buku', 'Jenjang Buku', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates2/header', $data);
            $this->load->view('laporan/ubah', $data);
            $this->load->view('templates2/footer');
        }else{
            $this->Laporan_model->ubahPemesanan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pesan');
        }
    }   
}
