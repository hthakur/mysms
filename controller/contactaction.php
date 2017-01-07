<?php  include_once '../model/db_project.php';
// print_r($_POST);
$reg_name="/^[A-Za-z][A-Za-z ]+[A-Za-z]$/";
$reg_num="/^[0-9][0-9]{9}$/";
if(preg_match( $reg_name,$_POST['con_name'])!=1){
	echo 'invalid name';
}
else if(preg_match( $reg_num,$_POST['con_number'])!=1){
	echo 'invaild number';
}
else if(empty($_POST['con_groupid'])){
	echo 'select group';
}
else{
	// echo 'added';
	$mail= $_SESSION['email'];
	$res=$obj->select('mysms_login','sign_id',"sign_email='$mail'");
	$id=$res[0]->sign_id;
	// echo $id;
	$_POST['con_signid']=$id;
	// echo "<pre>";
	// print_r($_POST);
	$name=$_POST['con_name'];
	$res=$obj->select('mysms_contact','con_id',"con_name='$name'");
	// print_r($res);
	// exit();
	if($res==0){
	$obj->insert('mysms_contact',$_POST);
	echo 'added';
	}
	else{
		echo 'contact already exist';
	}
}