<?php

class Member {
  
    public function index(){
        $this->load->view('member/header');
        $this->load->view('member/member');
    }
}
