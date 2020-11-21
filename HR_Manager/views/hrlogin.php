<?php include_once "../php/hrlogin_validation.php" ;?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
	  <title>Login</title>
	  <link rel="stylesheet" href="css/hrlogin_style.css">
   </head>
   <body>
      <div class="center">
	     <h1>Login</h1>
		 <form method="post">
		    <div class="txt_field">
			   <input type="text" name="username" required>
			   <span></span>
			   <label>Username</label>
			</div>
			<div class="txt_field">
			   <input type="password" name="pass" required>
			   <span></span>
			   <label>Password</label>
			</div>
			<div class="pass">Forgot Password?</div>
			<input type="submit" name="login" value="Login">
		 </form>
	  </div>
   </body>
</html>