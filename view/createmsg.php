<?php include_once 'header.php'; 
if(!isset($_SESSION['email']))
	header('location:index.php');
 ?>
 <?php include_once 'menu.php'; ?>	
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="library-wrapper text-center">
<form id="msg-form">
<h3>Create a Message</h3>
<p><select name="msg_libid">
<option value="">Select Library</option>
<?php 
$mail= $_SESSION['email'];
$res=$obj->select('mysms_login','sign_id',"sign_email='$mail'");
$id=$res[0]->sign_id;
// print_r($id);
$ans=$obj->select('mysms_library','*',"lib_signid='$id'"); 
// print_r($ans);
if(is_array($ans)):
	foreach ($ans as  $value):
?>
<option value="<?php echo $value->lib_id;?>" id="msg_opt">
<?php echo 
	$value->lib_name;
?>
	</option>
<?php endforeach;endif; ?>
</select></p>
<textarea name="msg_description" cols="28" rows="7" id="msg_box"></textarea>
<p class="msg_err">err </p>
<p><input type="button"  class="btn btn-warning btn-createmsg" value="save">
</p>
</form>
</div> 
<div class="space"></div>
</div>
</div>

</div>
<?php include_once 'footer.php';  ?>


