<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Oenta Web';
        $this->load->view('templates2/header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates2/footer');
    }

}
