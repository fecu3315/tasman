<?php
session_start();
if(isset($_SESSION['logged_in']) and $_SESSION['logged_in'] === true) {
	header('Location: index.php?page=main');
}

if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['login'])){
	
	$host="localhost"; // Host name 
	$username="tasman"; // Mysql username 
	$password="test1234"; // Mysql password 
	$db_name="tutorial"; // Database name 
	
	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	
	$query = "SELECT * FROM `users` WHERE email='".$_POST['email']."' and password='".md5($_POST['password'])."'";

	$result = mysql_query($query);
	if($result) {
		$count=mysql_num_rows($result);
    	if($count==1){
    		$_SESSION['logged_in'] =true;
    		echo 'Im authenticated!!!';die();
		} else {
			echo 'Unauthorized';die();
		}
	} else {
		echo 'Unauthorized';die();
	}
}
?>

<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title"align="center" >Sign In</div>
            </div>
            <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form action="" id="loginform" class="form-horizontal" role="form" method="post">
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-email" type="text" class="form-control" name="email" value="" placeholder="Email">
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
           <span class="input-group-addon"><li class="glyphicon glyphicon-lock"></li></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls" align="center">
                            <input class="btn btn-success" name="login" type="submit" value="Login" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" align="center">
                                  Users connection here
                                <a href="./?view=signup">
                                    Sign Up Here
                                
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>