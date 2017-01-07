<?php include_once 'header.php'; 
if(!isset($_SESSION['email']))
	header('location:index.php');
 ?>
 <?php include_once 'menu.php'; ?>
<div class="conatiner">
<div class="row">
<div class="col-md-3 pull-left sendsms-cont text-center">
	<h3>Library</h3>
	<?php $mail= $_SESSION['email'];
	$res=$obj->select('mysms_login','sign_id',"sign_email='$mail'");
	$id=$res[0]->sign_id; 
	$res=$obj->select('mysms_library','*',"lib_signid='$id'");
	if(is_array($res)):
	foreach ($res as $value): 
	?>
	<ul>
	<li><h4><a href="#" class="lib-link"  for="<?php echo $value->lib_id; ?>"><?php echo $value->lib_name;?></a></h4></li>
	</ul>
	
	<?php endforeach;endif ?>
	<?php if(!is_array($res)): ?>
	<h3><a href="library.php" class="liblink">Create library</a></h3>
	<?php endif;?>
	<h3>Messages</h3>
	<div class="display-msg">
	
	</div>
</div>
<div class="col-md-4 col-md-offset-1 sendsms-cont text-center">
	<h3>Send SMS</h3>
	<form id="sendsms">
	<p><input type="text"  placeholder="name" id="sendname"></p>
	<p><input type="text"  placeholder="phone" id="sendphone"></p>
	<textarea placeholder="message" cols="22" rows="8" id="sendmsg">
		
	</textarea>
	<p><input type="button" name="" value="send" class="btn btn-warning">
	</p>
	</form>
</div>
<div class="col-md-3 pull-right sendsms-cont text-center">
	<h3>Group</h3>
	<?php $res=$obj->select('mysms_group','*',"group_signid='$id'");
	if(is_array($res)):
	foreach ($res as $value): 
	?>
<ul>
	<li><h4><a href="#" class="group_link" for="<?php echo $value->group_id ?>"><?php echo $value->group_name ?></a></h4></li>
</ul>
<?php endforeach;endif; ?>
<?php if(!is_array($res)): ?>
	<h3><a href="library.php" class="liblink">Create library</a></h3>
	<?php endif;?>
<h3>Contacts</h3>
<ul>
	<li class="dis-contact"></li>
</ul>

</div>
</div>
<div class="space"></div>
</div>
 <?php include_once 'footer.php';  ?>