<?php 

include_once '../model/db_project.php';
// print_r($_POST);

$groupid=$_POST['groupid'];
$mail= $_SESSION['email'];
$res=$obj->select('mysms_login','sign_id',"sign_email='$mail'");
$id=$res[0]->sign_id;
$res=$obj->select('mysms_contact','*',"con_groupid='$groupid' AND con_signid='$id'");
if(is_array($res)){
foreach ($res as $value) 
{
	echo "<h4 class=\"click-link\" style=\"cursor:pointer;border:1px solid\" onclick=\"showcon('$value->con_name','$value->con_number')\">$value->con_name</h4>";

}
}
else{
	echo "<h4><a href='addconatct.php'>Add contacts in group first</a></h4>";
}
?>
<script type="text/javascript">
	function showcon(name,num){
		document.getElementById('sendname').value=name;
		document.getElementById('sendphone').value=num;
		// document.getElementById('sendmsg').value='num';
	}

</script>