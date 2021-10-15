<?php

class Hello extends CI_Controller
{
    public function index()
    {
        // $this->load->view('welcome_message');
        $this->load->model('m_mhs');
        $data['mahasiswa'] = $this->m_mhs->get_data();

        $this->load->view('v_mhs', $data);
    }
}
