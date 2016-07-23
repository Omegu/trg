<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Staff Management</title>
       <style>
            .staffhead{
                text-align: center;
            }
        </style>
    </head>
    <body>
         <br><br><br>
        <div class="container">       
            <hr>
        
            <div class="tabledata">
                <h4>ข้อมูลส่วนตัวของ <?php echo $this->session->userdata('memberuser') ?></h4>
                <table class="table table-hover">
                    <?php
                    $userdata = $this->session->userdata('memberuser');
                    $memberquery = $this->db->query("SELECT * FROM tb_member WHERE member_user='$userdata'");

                    foreach ($memberquery->result() as $rows) {
                        ?>
                        <tbody>
                            <tr>
                                <td>TRG ID</td>
                                <td><?php echo $rows->member_id ?></td>
                            </tr>
                            <tr>
                                <td>TRG User</td>
                                <td><?php echo $rows->member_user ?>
                            </tr>
                            <tr>
                                <td>TRG Status</td>
                                <td><?php echo $rows->member_status ?>
                            </tr>
                            <tr>
                                <td>TRG Gender</td>
                                <td><?php echo $rows->member_gender ?>
                            </tr>
                            <tr>
                                <td>TRG Age</td>
                                <td><?php echo $rows->member_age ?>
                            </tr>
                            <tr>
                                <td>TRG Nickname</td>
                                <td><?php echo $rows->member_nickname ?>
                            </tr>
                            <tr>
                                <td>TRG Email</td>
                                <td><?php echo $rows->member_email ?>
                            </tr>
                            <tr>
                                <td>ARMA3UID</td>
                                <td><?php echo $rows->member_uid ?>
                            </tr>
                            

                        </tbody>
                    <?php } ?>
                </table> 
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูลส่วนตัว</h4>
                    </div>
                    <form method="POST" action="<?php echo base_url('member/editmember') ?>" >
                        <div class="modal-body">
                            <table class="table table-hover">
                                <?php
                                $userdatamodal = $this->session->userdata('memberuser');
                                $memberquerymodal = $this->db->query("SELECT * FROM tb_member WHERE member_user='$userdatamodal'");
                                foreach ($memberquerymodal->result() as $rows) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>TRG ID</td>
                                            <td> <?php echo $rows->member_id ?>
                                                <input type="hidden" name="memberid" value="<?php echo $rows->member_id ?>"  />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TRG User</td>
                                            <td><?php echo $rows->member_user ?></td>
                                        </tr>
                                        <tr>
                                            <td>TRG Status</td>
                                            <td><?php echo $rows->member_status ?></td>
                                        </tr>
                                        <tr>
                                            <td>TRG Gender</td>
                                            <td><select name="membergender" class="input-sm" required="" >
                                                    <option>กรุณาใส่เพศ</option>
                                                    <option>ชาย</option>
                                                    <option>หญิง</option>
                                                </select >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TRG Age</td>
                                            <td><input type="number" name="memberage" value="<?php echo $rows->member_age ?>" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td>TRG Nickname</td>
                                            <td><input type="text" name="membernickname" value="<?php echo $rows->member_nickname ?>"required="" /></td>
                                        </tr>
                                        <tr>
                                            <td>TRG Email</td>
                                            <td><input type="email" name="memberemail" value="<?php echo $rows->member_email ?>" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td>ARMA3UID</td>
                                            <td><input type="text" name="memberuid" value="<?php echo $rows->member_uid ?>" required=""/></td>
                                        </tr>
                                        

                                    </tbody>
                                <?php } ?>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div></form>
                </div>

            </div>
        </div>
    </div>
        <style>
            
            .fieldWrapper{
                margin: 0 auto;
                width: 50%;
            }
            </style>
    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Change password</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/changepassword')?>" method="post">
                        <div class="fieldWrapper"> 
                            <input type="hidden" name="memberidchange" value="<?php echo $rows->member_id ?>" />
                            <input class="form-control"placeholder="กรอกรหัสผ่านที่จะเปลี่ยน"type="password" name="pass1" id="pass1">
                        </div><br>
                        <div class="fieldWrapper">
                            <input class="form-control" placeholder="กรอกรหัสผ่านอีกครั้ง"type="password" name="pass2" id="pass2" onkeyup="checkPass(); return false;">
                            <span id="confirmMessage" class="confirmMessage"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">เปลี่ยนรหัสผ่าน</button></form>
                </div>
            </div>
        </div>
    </div>

    </body>

    <script>
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
        $('#myTabs a[href="#profile"]').tab('show') // Select tab by name
        $('#myTabs a:first').tab('show') // Select first tab
        $('#myTabs a:last').tab('show') // Select last tab
        $('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
    })
</script>
</html>
