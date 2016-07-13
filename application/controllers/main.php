<?php

class Main extends CI_Controller {

    public function index() {

        $this->load->view('header');
        $this->load->view('home');
    }

    public function chart() {
        $this->load->view('chart');
    }

    public function knowlead() {
        $this->load->view('header');
        $this->load->view('knowledge');
    }

    public function insert() {
        $data = array(
            'member_user' => $this->input->post('username'),
            'member_pass' => $this->input->post('password'),
            'member_email' => $this->input->post('membermail'),
            'member_fb' => $this->input->post('memberfb'),
            'member_whitelist' => $this->input->post('whitelist')
        );
        $this->db->insert('tb_member', $data);
        redirect('main/loadlogin');
    }

    public function loadlogin() {
        $this->load->view('login');
    }

    public function loadmember() {
       
       
        $this->load->view('layout/header');
        $this->load->view('member/member');
    }

    public function loadadmin() {
        
        $this->load->view('layout/header');
        $this->load->view('admin/admin');
    }

}
