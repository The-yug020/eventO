<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="eventO-signup.css">
        <link rel="stylesheet" href="eventO-login.css">
</head>
<body>
<section>
            <div class="imgBx">
                <img src="Untitled design.png" alt="eventO" srcset="">
         </div>
         <div class="contentBx">
             <div class="formBx">
                <div class="hr1"><h2>Login</h2></div>
                 <form action="login.php" method="POST">
                 <?php echo display_error(); ?>
                     
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username" required>
                    </div>
                     <div class="password">
                        <span>Password</span>
                        <input type="password" placeholder="" id="passfield" name="password" required>
                        
                    </div>
                        <div class="inputBx">
                        <button type="submit" class="btn" name="login_btn">Login</button>
                        </div>
                        <div class="inputBx">
                        <p>Not have an account? <a href="register.php">Sign Up</a></p>
                     </div>
                 </form>
                 <hr>
                 <div class="orDiv">&nbsp Or</div>
                 <h3>Login with social media</h3>
                 <ul class="sci">
                   
                     <li><img src="facebook.png"></li>
                     <li><img src="twitter.png"></li>
                     <li><img src="instagram.png"></li>
                 </ul>
             </div>
         </div>
        </section>
        
        <script type="text/javascript">
         var password = document.getElementById('passfield');
         var flag = 1;
         function check(elem){
             if(elem.value.length > 0){
                 if(elem.value != passfield.value){
                      document.getElementById('alert').innerText = "Password does not match";
                      flag=0;
                 }else{
                    document.getElementById('alert').innerText = "";
                    flag=1;
                 }
             }else{
                    document.getElementById('alert').innerText = "Please enter confirm pasword";
                    flag=0;
                 }
               
         }
         function validate(){
             if(flag==1){
                 return true;
             }else{
                 return false;
             }
         }
        </script>