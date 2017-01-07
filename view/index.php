<?php include_once 'header.php'; ?>
<?php include_once 'menu.php'; ?>	
      <div class="row">
      <?php 
      if(isset($_SESSION['email'])):
        $email=$_SESSION['email'];
        $result=$obj->select('mysms_login','*',"sign_email='$email'");
      ?>
     
    <div class="col-md-6 col-md-offset-3">
    <div class="login-text-wrapper text-center">
    <h3>Welcome <?php   
      echo $result[0]->sign_name
       ?></h3>
       <p>You can send free SMS allover India.More than 90% are delivered under 10 seconds.</p>
    </div>
    </div>
    <?php endif; ?>
    
			<div class="row">
			<div class="head-content">
				<div class="col-md-6 col-xs-6 head-about">
				<h3>About SMS Portal</h3>
				<p>We have changed the way people text, connect with friends family. From sending the coolest sms greetings, to scheduling sms when you're on the go, to grabbing mobile recharges for free, all this can be done using our services.</p>
				&nbsp;
				<p>Copyright 2015</p>
				</div>
				<div class="col-md-6 col-xs-6 head-about">
				<h3>Send Free SMS</h3>
				<p>We deliver your messages to all the mobile operators and networks for FREE</p>
				<p>Never miss a birthday, or any important occasion, just schedule SMS for future delivery, absolutely free</p>
				<p>You can also make Group SMS to many friends all in one go</p>
				</div>
			</div>
			</div>
			<div class="space"></div>
			<div class="space"></div>
		</div>
	</div>
	<!-- Modal start -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login details</h4>
      </div>
      <div class="modal-body">
      
        <form id="login_form">
        	<p>Email:</p>
        	<p><input type="text" name="log_email"></p>
        	<p>Password:</p>
        	<p><input type="password" name="log_pass"></p>
        	<p class="log_err"></p>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary login_btn">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- modal closes -->
	<!-- Modal1 start -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
      </div>
      <div class="modal-body">
        <form id="signup_form">
        	<p>Name:</p>
        	<p><input type="text" name="sign_name">   </p>
        	<p>Email:</p>
        	<p><input type="text" name="sign_email">   </p>
        	<p>Mobile Number:</p>
        	<p><input type="text" name="sign_mob">   </p>
        	<p>Password:</p>
        	<p><input type="text" name="sign_pass">   </p>
        	<p>Confirm Password:</p>
        	<p><input type="text" name="sign_cpass">   </p>
        	<p class="err_signup"></p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary signup_btn">Sign Up</button>
      </div>
    </div>
  </div>
</div>
<!-- modal1 closes -->
<?php include_once 'footer.php';  ?>