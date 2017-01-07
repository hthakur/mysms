<?php 

include_once '../model/db_project.php';

$libid=$_POST['libid'];
$mail= $_SESSION['email'];
$res=$obj->select('mysms_login','sign_id',"sign_email='$mail'");
$id=$res[0]->sign_id;
$res=$obj->select('mysms_msg','msg_description',"msg_libid='$libid' AND msg_signid='$id'");
if(is_array($res))
{
foreach ($res as $value) 
{
	echo "<h4 style=\"cursor:pointer;border:1px solid\" onclick=\"show_msg('$value->msg_description')\">$value->msg_description </h4>";
}
}
else
{
	echo "<h4>Create message first <a href='createmsg.php'>Click here</a></h4>";
}

?>
<script type="text/javascript">
	function show_msg(msg)
	{
		document.getElementById('sendmsg').value=msg;
	}
</script>