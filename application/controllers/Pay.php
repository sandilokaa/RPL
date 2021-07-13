<?php

class Pay extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pay_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Bramedikau';
        $data['pembayaran'] = $this->Pay_model->getAllPembayaran();
        $this->load->view('templates2/header', $data);
        $this->load->view('pay/index', $data);
        $this->load->view('templates2/footer');
    }

   public function formpembayaran()
    {
        $data['judul'] = 'Form Pembayaran';

        $this->form_validation->set_rules('invoice', 'Invoice', 'required');
        $this->form_validation->set_rules('nomor_rekening', 'Nomor Rekening', 'required');
        $this->form_validation->set_rules('total_harga', 'Total Harga', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates2/header', $data);
            $this->load->view('pay/formpembayaran');
            $this->load->view('templates2/footer');
        }else{
            $this->Pay_model->bayarBuku();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pay');
        }
    } 
}
