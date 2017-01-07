<?php include_once '../model/db_project.php';
$mail= $_SESSION['email'];
// print_r($_POST);
if(empty($_POST['msg_libid']))
{
	echo 'select a library';
}
else if(strlen($_POST['msg_description'])<5||strlen($_POST['msg_description'])>2000)
{
	echo 'invalid message description';
}
else{
	
	$res=$obj->select('mysms_login','sign_id',"sign_email='$mail'");
	$id=$res[0]->sign_id;
	// echo $id;
	$_POST['msg_signid']=$id;
	// echo "<pre>";
	// print_r($_POST);

	$obj->insert('mysms_msg',$_POST);
	echo 'added';
}