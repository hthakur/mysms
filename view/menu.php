<div class="col-md-12 col-sm-12 head-background">
	<div class="space"></div>
		<div class="sms-head col-md-4"><a href="index.php">SMS Portal</a></div>
	</div>
	<div class="head-body">
		<div class="container">
			<div class="head-menu">
      <?php 
      if(!isset($_SESSION['email'])):?>
				<div class="col-md-2 col-md-offset-10  space pull-right">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#myModal">Login</button>
					<button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#myModal1">Sign Up</button>
				</div>
				<!-- <div class="col-md-1">
				<button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#myModal1">Sign Up</button>
				</div> -->
			</div>
      <?php endif; ?>
      <?php 
      if(isset($_SESSION['email'])):
        $email=$_SESSION['email'];
        $result=$obj->select('mysms_login','*',"sign_email='$email'");
      ?>
      <div class="row">
      <div class="col-md-8 col-md-offset-4 ">
     
      <ul class="nav nav-pills login-menu pull-right">

      <li><a href="index.php">Welcome
      <?php   
      echo $result[0]->sign_name
       ?>

      </a></li>
      <li><a href="library.php">Library/Group</a></li>
      
      <li><a href="createmsg.php">Create Message</a></li>
      <li><a href="addconatct.php">Add Contacts</a></li>
      <li><a href="sendsms.php">Send SMS</a></li>
      <li><a href="logout.php">Logout</a></li>
      </ul>
    
      </div>
      </div>
      <?php endif; ?>