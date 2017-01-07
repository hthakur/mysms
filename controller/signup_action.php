<?php
	include_once '../model/db_project.php';
	//han@gmail.com
	//han89-89@gmail.co.in
	$reg_name="/^[A-Za-z][A-Za-z0-9]+[A-Za-z]$/";
	$reg_email="/^([A-Za-z][A-Za-z0-9\- _\.]+[A-Za-z0-9])@([A-Za-z][A-Za-z0-9\-]+[A-Za-z])\.([A-Za-z]{2,})(\.[A-Za-z]{2,})?$/";
	$reg_pass="/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@]).{4,10}$/";
	$reg_mob="/^[1-9][0-9]{9}$/";
	if(preg_match($reg_name, $_POST['sign_name'])!=1){
		echo 'inavlid name';
	}
	else if(preg_match($reg_email, $_POST['sign_email'])!=1){
		echo 'invalid email';
	}
	else if(preg_match($reg_mob,$_POST['sign_mob'])!=1){
		echo "invalid mobile number";
	}
	else if(preg_match($reg_pass, $_POST['sign_pass'])!=1){
		echo 'invalid password';
	}
	else if($_POST['sign_pass']!=$_POST['sign_cpass']){
		echo "confirm password doesn't match";
	}
	else{
		unset($_POST['sign_cpass']);
		$email=$_POST['sign_email'];
		// echo '<pre>';
		// print_r($_POST);
		$ans=$obj->select('mysms_login','sign_email',"sign_email='$email'");
		// print_r($ans);
		if($ans==0)
		{
				$pass=$_POST['sign_pass'];
				$_POST['sign_pass']=sha1($pass);
				$obj->insert('mysms_login',$_POST);
				echo 'inserted';}
		else{
			echo 'account already exist';
		}
	}
?>