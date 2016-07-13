<?php

class Admin extends CI_Controller {

    public function deletedata($id) {
        $this->db->query("DELETE FROM tb_member WHERE member_id='$id'");
        redirect(base_url('main/loadamin'));
       
    }
    
    
    

}
