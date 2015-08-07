<?php
$error = false;
$error_msg = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// print '<pre>';
	// print_r($_POST);
	// print '<pre>';
	// die();
	$host="localhost"; // Host name 
	$username="tasman"; // Mysql username 
	$password="test1234"; // Mysql password 
	$db_name="tutorial"; // Database name 
	
	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	
	$query = "INSERT INTO `users` 
	(`email`, `password`, `firstname`, `lastname`, `gender`, `country`,  `updated`) 
	VALUES 
	('".$_POST['email']."', MD5('".$_POST['password']."'), '".$_POST['firstname']."', 
	'".$_POST['lastname']."', '".$_POST['gender']."', '".$_POST['country']."', '".date('Y-m-d H:i:s')."');";
	
	$result = mysql_query($query);
	if($result) {
		header('Location: index.php?page=login');
	}
	// } else {
		// $error = true;
		// $error_msg = "Email already exist";
	// }
}
?>
<script>
$(document).ready(function() { // 이 부분은 document 가 load 가 끝나면 이라는 뜻입니다.
	$('#email').blur(function(e) {
		
		var email = $('#email').val();
		var formValid = false;
		if(email) {
			$.ajax({
			    url : "ajax/email_check.php",
			    type: "POST",
			    data : {email: email},
			    success: function(data)
			    {
			        if(data === 'EXIST') {
			        	$('#email_error_rsp').addClass('glyphicon-remove').removeClass('glyphicon-ok');
			        	
			        } else {
			        	$('#email_error_rsp').addClass('glyphicon-ok').removeClass('glyphicon-remove');
			        }
			    },
			    error: function (jqXHR, textStatus, errorThrown)
			    {
			 		alert('Woops. error');
			    }
			});
		}
		
	});

});
</script>
<div class="container">
    <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
            </div>
            <div class="panel-body" >
                <form id="signupform" class="form-horizontal" role="form" method="POST">
                    <div id="signupalert" style="<?php if(!$error) echo 'display:none';?>" class="alert alert-danger">
                        <p>Error:</p>
                        <span><?php echo $error_msg;?></span>
                    </div>
                    <div class="form-group">
                        <label for="user_id" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" style="float:left; width:95%;">
                            <span class="pull-right glyphicon" id="email_error_rsp"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="user_id" class="col-md-3 control-label">Firstname</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="firstname" placeholder="Firstname">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="user_id" class="col-md-3 control-label">Lastname</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="user_id" class="col-md-3 control-label">Gender</label>
                        <div class="col-md-9">
                            <input type="radio" class="form-control" name="gender" value="male" /> Male
                            <input type="radio" class="form-control" name="gender" value="female" /> Female
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="user_id" class="col-md-3 control-label">Country</label>
                        <div class="col-md-9">
                            <select name="country">
                            	<option value="NZ">New Zealand</option>
                            	<option value="AU">Australia</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" name="singup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>