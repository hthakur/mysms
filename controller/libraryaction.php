<?php 
include_once '../model/db_project.php';
// echo '<pre>';
// print_r($_POST);
$reg_name="/^[A-Za-z0-9][A-Za-z0-9 ]+[A-Za-z0-9]$/";
if(preg_match($reg_name, $_POST['lib_name'])!=1){
	echo 'invaild name';
}
elseif (empty($_POST['optradio'])) {
	echo 'choose library or group option';
}
else{
	$email=$_SESSION['email'];
	// echo 'insert';
	$userid=$obj->select('mysms_login','sign_id',"sign_email='$email'");
	$id=$userid[0]->sign_id;
	if($_POST['optradio']=='library'){
		// echo 'its libaray';
		unset($_POST['optradio']);
		$_POST['lib_signid']=$id;
		$name=$_POST['lib_name'];
		// $obj->insert()
		// echo '<pre>';
		// print_r($_POST);
		$res=$obj->select('mysms_library','*',"lib_name='$name' AND lib_signid='$id'");
		// exit();
		// print_r($res);
		if($res==0){
			$obj->insert('mysms_library',$_POST);
			echo 'inserted';

		}
		else{
		echo 'name alreday exist';
	}
	}
	else{
		// echo 'its group';
		unset($_POST['optradio']);
		$_POST['group_name']=$_POST['lib_name'];
		unset($_POST['lib_name']);
		$_POST['group_signid']=$id;
		$name=$_POST['group_name'];
		// echo '<pre>';
		// print_r($_POST);
		$result=$obj->select('mysms_group','*',"group_name='$name' AND group_signid=$id");
		// print_r($result);
		// exit();
		
		if($result==0){
		$obj->insert('mysms_group',$_POST);
		echo 'inserted';
		}
		else{
			echo 'name already exist';
		}
	}
}