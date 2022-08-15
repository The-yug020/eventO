<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="eventO-create_user.css">
	<title>Registration system PHP and MySQL - Create user</title>
</head>
<body>
<section>
<div class="imgBx">
        <img src="Untitled design.png" alt="eventO" srcset="">
         </div>
		 <div class="contentBx">
             <div class="formBx">
                <div class="hr1"><h2>Create User</h2></div>
                 <form action="create_user.php" method="POST">
				 <?php echo display_error(); ?>
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </div>
					<div class="inputBx">
                        <span>E-mail</span>
                        <input type="text" name="email" value="<?php echo $email; ?>">
                    </div>
					<div class="inputBx">
			         <label>User type</label>
			         <select name="user_type" id="user_type" >
				     <option value=""></option>
				     <option value="admin">Admin</option>
				     <option value="user">User</option>
                     <option value="organiser">Organiser</option>
			         </select>
		             </div>
                     <div class="password">
                        <span>Password</span>
                        <input type="password" placeholder="" id="passfield" name="password_1" required>
                        <i class="fa fa-eye-slash" id="eye"></i>
                    </div>
                    <div class="password">
                        <span>Confirm Password</span>
                        <input type="password"  id="passfield1" name="password_2" onkeyup="check(this)" required>
                        <error id="alert"></error>
                    </div>
                    <div class="inputBx">
					<button type="submit" class="btn" name="register_btn"> + Create user</button>
                        </div>
                 </form>
                 <div><p><span class="small">By continuing, you agree to accept our 
                    <a href="#">Privacy Policy</a> &amp; <a href="#">Terms of Services</a>.</span></p>
                </div>
             </div>
         </div>
	</form>
</section>
</body>
</html>