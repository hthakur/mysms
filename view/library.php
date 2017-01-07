<?php include_once 'header.php'; 
if(!isset($_SESSION['email']))
	header('location:index.php');
 ?>
 <?php include_once 'menu.php'; ?>	
 <div class="head-body">
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="library-wrapper text-center">
<h2>Add Library/Group</h2>
<form id="library-form">
<p><input type="text" name="lib_name" placeholder="enter" ></p>
<p>
<label><input type="radio" name="optradio" value="library">Library</label>
<label><input type="radio" name="optradio" value="group">Group</label>
</p>
<p class="library_err">err</p>
<p><input type="button" class="btn btn-warning lib-add" value="Add"></p>
</form>
</div>
</div>
</div>
</div>
<div class="space"></div>
</div>
<?php include_once 'footer.php';  ?>