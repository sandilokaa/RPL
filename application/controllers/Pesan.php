<?php

class Pesan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pesan_model');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data['judul'] = 'Bramedikau';
        $this->load->view('templates2/header', $data);
        $this->load->view('pesan/index');
        $this->load->view('templates2/footer');
    }

    public function formpemesanan()
    {
        $data['judul'] = 'Form Pemesanan';

        $this->form_validation->set_rules('nama_buku', 'Nama Buku', 'required');
        $this->form_validation->set_rules('nama_penulis', 'Nama Penulis', 'required');
        $this->form_validation->set_rules('jenjang_buku', 'Jenjang Buku', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates2/header', $data);
            $this->load->view('pesan/formpemesanan');
            $this->load->view('templates2/footer');
        }else{
            $this->Pesan_model->pesanBuku();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pesan');
        }
    }
}
