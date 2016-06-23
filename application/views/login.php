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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="loginform">
               <h3>Elearning </h3> <hr><br>
                <input class="form-control"type="text" name="username" value="" /><br>
                <input class="form-control"type="password" name="password" value="" /><br>
                <input class="btn btn-primary"type="submit" value="Login" />
                
                <hr><br><a href="<?php echo site_url('main/chart')?>">Chart</a>
            </div> 
            
        </div>
        <div class="footer">
            <h5>Bootstarp & AngularJS</h5>
        </div>
    </body>
</html>
