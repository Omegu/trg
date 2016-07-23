<?php

class Admin extends CI_Controller {

    public function deletedata($id) {
        $this->db->query("DELETE FROM tb_member WHERE member_id='$id'");
        redirect(base_url('main/loadamin'));
    }

    public function managemember() {
        $this->load->view('layout/header');
        $this->load->view('admin/membermanage');
    }

    public function editadmin() {
        $memberid = $this->input->post('memberid');
        $data = array(
            'member_gender' => $this->input->post('membergender'),
            'member_age' => $this->input->post('memberage'),
            'member_nickname' => $this->input->post('membernickname'),
            'member_email' => $this->input->post('memberemail'),
            'member_uid' => $this->input->post('memberuid'),
        );
        $this->db->where('member_id', $memberid);
        $this->db->update('tb_member', $data);

        redirect(base_url('main/loadadmin'));
    }

//    public function changepassword() {
//        $password = $this->input->post('passwordchange');
//        $confirmpassword = $this->input->post('passwordretry');
//        if ($password == "" & $confirmpassword == "") {
//            echo "กรุณากรอกรหัสผ่านทั้ง 2 ช่อง";
//        } else if ($password != $confirmpassword) {
//            echo "รหัสผ่านไม่ตรงกัน";
//        } else {
//            echo "รหัสผ่านตรงกัน";
//        }
//    }
    public function changepassword(){
        $memberidchange = $this->input->post('memberidchange');
        $datachange = array(
            'member_pass'
        );
        
    }

}
