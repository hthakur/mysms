<?php
include_once '../model/db_project.php';

$reg_email="/^([A-Za-z][A-Za-z0-9\- _\.]+[A-Za-z0-9])@([A-Za-z][A-Za-z0-9\-]+[A-Za-z])\.([A-Za-z]{2,})(\.[A-Za-z]{2,})?$/";
$reg_pass="/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@]).{4,10}$/";
// print_r($_POST);
// $_SESSION['email'];
if(preg_match($reg_email, $_POST['log_email'])!=1)
{
	echo 'invaild email';
}
else if(preg_match($reg_pass, $_POST['log_pass'])!=1)
{
	echo 'invalid password';
}
else
{
	$email=$_POST['log_email'];
	$pass=$_POST['log_pass'];
	$enpass=sha1($pass);
	$result=$obj->select('mysms_login','sign_pass',"sign_email='$email'");
	// echo "<pre>";
	// print_r($result);
	
	
	if($result==0){
		echo 'invalid email';
	}
	else
	{
		$cpass=$result[0]->sign_pass;
		// echo $cpass."<br>";
		// echo $enpass;
		if($enpass==$cpass){
			// echo 'logged in';
			$_SESSION['email']=$email;
			echo 1;
		}
		else{
			echo 'invalid password';
		}
	}
}
?>