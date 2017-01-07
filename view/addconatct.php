<?php include_once 'header.php'; 
if(!isset($_SESSION['email']))
	header('location:index.php');
 ?>
 <?php include_once 'menu.php'; ?>
<div class="container">
<div class="row">
<div class="col-md-4 contact-wrapper text-center">
<h3>Add Contact </h3>
<form id="contact-form">
<p><input type="text" name="con_name" id="con_name" placeholder="name"></p>
<p><input type="text" name="con_number" placeholder="number"></p>

<p><select name="con_groupid" id="select_group">
	<option value="">Select Group</option>
	
<?php 
$mail= $_SESSION['email'];
$res=$obj->select('mysms_login','sign_id',"sign_email='$mail'");
$id=$res[0]->sign_id;
// print_r($id);
$ans=$obj->select('mysms_group','*',"group_signid='$id'"); 
// print_r($ans);
if(is_array($ans)):
	foreach ($ans as  $value):
?>
<option value="<?php echo $value->group_id ?>" name="con_groupid">
	<?php echo $value->group_name; ?>
		</option>
<?php endforeach;endif; ?>
</select>
</p>
<p><input type="button" value="add" class="btn btn-warning addcontact"></p>
<p class="contact_err">err</p>
</form>
</div>
<div class="col-md-4 col-md-offset-2 displaycontact-wrapper text-center">
<h3>List of Contacts </h3>
<ul>
<li>Name of Contacts</li>
<?php 
$mail= $_SESSION['email'];
$res=$obj->select('mysms_login','sign_id',"sign_email='$mail'");
$id=$res[0]->sign_id;
$res=$obj->select('mysms_contact','con_name',"con_signid='$id'");  
if(is_array($res)):
	foreach ($res as $value) :
?>
<li>
<?php echo $value->con_name;?>

</li>
<?php endforeach; endif; ?>

<li class="contact-add"></li>
</ul>
</div>
</div>
<div class="space"></div>
</div>
 <?php include_once 'footer.php';  ?>
