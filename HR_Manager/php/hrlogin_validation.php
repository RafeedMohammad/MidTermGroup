<?php
	$username="";
	$err_username="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$flag=false;
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			//$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
		}
		if(empty ($_POST["pass"])){
			//$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
        }
		
		if(!$hasError)
		{
			$hrs = simplexml_load_file("hrdata.xml");
			foreach($hrs as $hr)
			{
                if(strcmp($hr->username,$username)==0 && strcmp($hr->password,$pass)==0)
				{

					header("Location: hr_dashboard.php");
					$flag=true;
					break;
                }
			}
			
			if(!$flag)
			{
				echo "Invalid Credentials!";
			}
		}
	}
	
?>