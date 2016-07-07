<?php

class Checklogin extends CI_Controller {

    public function chklogin() {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $Query = $this->db->query("SELECT * FROM tb_member WHERE member_user='$user' AND member_pass='$pass' ");
        $status = $Query->row();
        $rows = $status->member_status;
        if ($Query->num_rows() > 0) {
            if($this->session->userdata('userlogin')== "member"){
                $this->load->view('member/header');
                $this->load->view('member/member');
                        
            } elseif ($this->session->userdata('userlogin') == "admin")
                {
                $this->load->view('admin/header');
                $this->load->view('admin/admin');
                {
            }
            
        } 
            
            $this->session->set_userdata('userlogin',$rows);
            
        } else {
            redirect();
        }
    }
    
    
    public  function logout(){
       
        $this->session->destroy();
        redirect(base_url('home','refresh'));
    }

}
