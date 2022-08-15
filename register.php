<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="eventO-signup.css">
</head>
<body>
<section>
        <div class="imgBx">
                <img src="Untitled design.png" alt="eventO" srcset="">
         </div>
         <div class="contentBx">
             <div class="formBx">
                <div class="hr1"><h2>Sign Up</h2></div>
                 <form action="register.php" method="POST">
                 <?php echo display_error(); ?>
                    <div class="inputBx">
                        <p>Already have an account? <a href="login.php">Sign in</a>
                     </div>
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </div>
                    <div class="inputBx">
                        <span>E-mail</span>
                        <input type="text" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="inputBx">
			         <span>User type</span>
			         <select name="user_type" id="user_type" >
				     <option value="user">User</option>
                     <option value="organiser">Organiser</option>
			         </select>
		             </div>
                     <style>
                         .inputBx select{
    width: 100%;
    padding: 10px 20px;
    outline: none;
    font-weight: 400;
    border: 1px solid #4d628b;
    font-size: 16px;
    letter-spacing: 1px;
    color: #4d628b;
    background: transparent;
    border-radius: 30px;
}
                     </style>
                     <div class="password">
                        <span>Password</span>
                        <input type="password" placeholder="" id="passfield" name="password_1" >
                        
                    </div>
                    <div class="password">
                        <span>Confirm Password</span>
                        <input type="password"  id="passfield1" name="password_2">
                        <error id="alert"></error>
                    </div>
                   
                    <div class="inputBx">
                    <button type="submit" class="btn" name="register_btn">Sign-In</button>
                        </div>
                 </form>
                 <div><p><span class="small">By continuing, you agree to accept our 
                    <a href="#">Privacy Policy</a> &amp; <a href="#">Terms of Services</a>.</span></p>
                </div>
             </div>
         </div>
        </section>
        <script>
            document.getElementById("eye").addEventListener("click",function(){
                if(document.getElementById("passfield").type=="password"){
                    document.getElementById("passfield").type="text";
                    this.classList.add("fa-eye");
                    this.classList.remove("fa-eye-slash");
                }else{
                    document.getElementById("passfield").type="password";
                    this.classList.remove("fa-eye");
                    this.classList.add("fa-eye-slash");
                }
            });
           
        </script>
</body>
</html>