<?php
session_start();

if($_POST['txt_user']&&$_POST['txt_password']){
	if(($_POST['txt_user']=='proto')&&($_POST['txt_password']=='proto')){
			$_SESSION["user"] = $_POST['txt_user'];
			$_SESSION["pass"] = $_POST['txt_password'];
			header("Location: http://smith-cargo.com/proto/home.php");
		}
	}else{};
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>Protocorp</title>

        <link rel="icon" type="image/ico" href="favicon.ico">
        <link rel="stylesheet" type="text/css" media="all" href="style.css">        

        <link rel="stylesheet" type="text/css" media="all" href="boostrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" media="all" href="third-party/css/bootstrap.min.css">
        <script src="js/jquery-1.12.0.js"></script>
        <style>
            h4 { 
                border:0 solid #0E80C6; 
                border-bottom-width:1px;
                padding-bottom:10px;
                text-align: center;
                color: #0E80C6;
            }
        </style>
    </head>

    <body>
        <div id="encabezado">
            <img src="img/logo.png" id="logo1">
        </div>

        <div class="contenedor">            
            <div class="row">                     
                <div class="span6 offset4" style="margin-top: 10px;"> 
                    <h4> LOGIN </h4>
                </div>
                <div class="span6 offset3" align="center" style="margin-top: 10px;">
                    <form id="login_form" action="index.php" method="POST" class="form-horizontal" >
                        <div class="control-group" style="margin-left: 5%;">
                            <label class="control-label">User</label>                
                            <div class="controls">                                
                                <input type="text" name="txt_user" id="txt_user" class="input-xlarge" required="" />
                            </div>
                        </div>
                        <div class="control-group" style="margin-left: 5%;">
                            <label class="control-label">Password</label>
                            <div class="controls">                                
                                <input type="password" name="txt_password" id="txt_password" class="input-xlarge" required="" />
                            </div>
                        </div>
                        <div class="control-group" style="margin-left: 5%;">
                            <div class="controls">
                                <input type="submit" value="Login" class="btn btn-primary" style="float: right;"/>
                            </div>
                        </div>      
                    </form>                    
                </div>                    
            </div>
        </div>

        <script src="js/tabs.js"></script>        
    </body>
</html>