<?php

class Main extends CI_Controller {

    public function index() {
        
        $this->load->view('header');
        $this->load->view('home');
    }

    public function chart() {
        $this->load->view('chart');   
    }

}
