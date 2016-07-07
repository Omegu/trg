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
        );
        $this->db->insert('tb_member', $data);
        redirect('main/loadlogin');
    }

    public function loadlogin() {
        $this->load->view('login');
    }

   

}
