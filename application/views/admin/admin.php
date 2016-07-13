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
        <div class="container"> <br><br><br><br>
            <h3 class="staffhead">Staff Management</h3>
            <div class="tabfad">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Member List</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Mission Lastplay</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Ban user list</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Manage Player</a></li>
                </ul>
               
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <br>
                        <div class="">
                            <form method="post" action="">
                                <select name="whitelist"  style="width: 8%">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                                <input type="submit" value="Go" class="btn btn-primary"/>
                            </form> 
                        </div>


                        <table  id="example" class="table table-striped" cellspacing="0" width="100%">
                            <thead>

                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Whitelist</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $member = $this->input->post('whitelist');
                                $queryuser = $this->db->query("SELECT * FROM tb_member WHERE member_whitelist='$member'");
                                foreach ($queryuser->result() as $row) {
                                    $id = $row->member_id;
                                    ?>
                                    <tr>
                                        <td><?php echo $row->member_id; ?></td>
                                        <td><?php echo$row->member_user; ?></td>
                                        <td><?php echo$row->member_status; ?></td>
                                        <td><?php echo$row->member_whitelist; ?></td>
                                        <td><a href="<?php echo base_url('admin/deletedata/' . $id) ?>" onclick=" return confirm('ลบหรือไม่')">ลบ</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table></div>
                    <div role="tabpanel" class="tab-pane fade" id="profile">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Mission name</th>
                                    <th>Maxplayer</th>
                                    <th>Player on mission</th>
                                </tr>
                            </thead>
                            <?php
                            $missiondata = $this->db->query('SELECT * FROM tb_missionlist');
                            foreach ($missiondata->result() as $rowmission) {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $rowmission->mission_name ?></td>
                                        <td><?php echo $rowmission->mission_playermax ?></td>
                                        <td><?php echo $rowmission->mission_playnow ?></td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="messages">.asdasdasdas..</div>
                    <div role="tabpanel" class="tab-pane fade" id="settings">
                        <form method="post" action="<?php echo base_url('admin/manageplayer')?>">
                        <table  id="managerplayer" class="table table-striped" cellspacing="0" width="100%">
                            <thead>

                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Whitelist</th>
                                    <th colspan="2">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $managemember = "yes";
                                $managedata = $this->db->query("SELECT * FROM tb_member WHERE member_whitelist='$managemember'");
                                foreach ($managedata->result() as $row) {
                                    $manageid = $row->member_id;              
                                    ?>
                                    <tr>
                                        <td><?php echo$row->member_id; ?></td>
                                        <td><?php echo$row->member_user; ?></td>
                                        <td><?php echo$row->member_status; ?></td>
                                        <td><?php echo$row->member_whitelist; ?></td>
                                        <td></td>
                                        
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                            </form>

                    </div>
                </div>

            </div>



            
        </div>



        <!-- datatable jquery-->
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
            $(document).ready(function () {
                $('#manageplayer').DataTable();
            });

        </script>

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
