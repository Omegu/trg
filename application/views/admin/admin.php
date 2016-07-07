<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                <div role="tabpanel" class="tab-pane fade in active" id="home">dsadsadasdadas</div>
                <div role="tabpanel" class="tab-pane fade" id="profile">.dsadasdasdasdsa.</div>
                <div role="tabpanel" class="tab-pane fade" id="messages">.asdasdasdas..</div>
                <div role="tabpanel" class="tab-pane fade" id="settings">..asdasdasdasdas.</div>
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
