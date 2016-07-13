<?php

class Member extends CI_Controller {

    public function index() {
        $this->load->view('member/header');
        $this->load->view('member/member');
    }

    public function getdatauser() {
        
    }

    public function editmember() {
        $memberid = $this->input->post('memberid');
        $data = array(
            'member_gender' => $this->input->post('membergender'),
            'member_age' => $this->input->post('memberage'),
            'member_nickname' => $this->input->post('membernickname'),
            'member_email' => $this->input->post('memberemail'),
            'member_uid' => $this->input->post('memberuid'),
            'member_fb' => $this->input->post('memberfacebook'),
            'member_steam' => $this->input->post('membersteam')
        );
        $this->db->where('member_id', $memberid);
        $this->db->update('tb_member', $data);

        redirect(base_url('main/loadmember'));
    }

    public function changepassword() {
        $password = $this->input->post('passwordchange');
        $confirmpassword = $this->input->post('passwordretry');
        if($password == "" & $confirmpassword == "" ) {
            echo "กรุณากรอกรหัสผ่านทั้ง 2 ช่อง";
        } else if ($password != $confirmpassword) {
            echo "รหัสผ่านไม่ตรงกัน";
        } else {
            echo "รหัสผ่านตรงกัน";
        }
        

}



}
