<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <style>
            .loginform{
                margin: 0 auto;
                margin-top: 20%;
                width: 30%;

            }
            h3{
                text-align: center;
            }
            .footer{
                text-align: center;
            }
            .img{
                margin: 0 auto;
                display: block;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="loginform">
                <img class="img"src="http://i.imgur.com/1kPfLRx.png">
                <h3>Thailand Roleplay Gaming</h3> <hr><br>
                <form method="POST" action="<?php echo base_url('checklogin/chklogin') ?>">
                    <input class="form-control"type="text" name="username" value="" /><br>
                    <input class="form-control"type="password" name="password" value="" /><br>
                    <input class="btn btn-primary"type="submit" value="Login" />
                </form>


                <hr>
            </div> 

        </div>
        <div class="footer">
            <h5>Bootstarp & AngularJS</h5>
        </div>
    </body>
</html>
