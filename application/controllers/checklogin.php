<?php

class Checklogin extends CI_Controller {

    //ส่วนของการ login session
    public function chklogin() {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $Query = $this->db->query("SELECT * FROM tb_member WHERE member_user='$user' AND member_pass='$pass' ");

        if ($Query->num_rows() > 0) {
            $rows = $Query->row();            
            $memberstatus = $rows->member_status;
            $memberuser = $rows->member_user;

            $this->session->set_userdata('status', $memberstatus);
            if ($this->session->userdata('status') == "staff") {
                $this->session->set_userdata('memberuser', $memberuser);
                $lasttimeadmin = $this->db->query("INSERT INTO tb_lastlogin(lastlogin_user) VALUES ('$user')");
                redirect(base_url('main/loadadmin'));
            } else if ($this->session->userdata('status') == "member") {
                $this->session->set_userdata('memberuser', $memberuser);
                $lasttimemember = $this->db->query("INSERT INTO tb_lastlogin(lastlogin_user) VALUES ('$user')");
                redirect(base_url('main/loadmember'));
            } else {
                redirect(base_url('main/index'));
            }
        }
    }

    //ออกจากระบบ
    public function logout() {

        $this->session->sess_destroy();
        redirect(base_url('main/index'));
    }

}
