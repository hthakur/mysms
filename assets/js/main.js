// alert()
$(document).ready(function(){
	$('.signup_btn').click(function(){
		// alert('yo');
		rec=$('#signup_form').serialize();
		$.post('../controller/signup_action.php',rec).success(function(res){
			// alert('posted');
			$('.err_signup').html(res);
		})
	});
$('.login_btn').click(function(){
		// alert('yo');
		rec=$('#login_form').serialize();
		$.post('../controller/login_action.php',rec).success(function(res){
			// alert('posted');
			
			if(res==1){
			// alert();
			window.location.href="index.php";
		}
		else{
			$('.log_err').html(res);
		}
		});


	});
$('.lib-add').click(function(){
	// alert();
	var rec= $('#library-form').serialize();
	$.post('../controller/libraryaction.php',rec).always(function(res){
	$('.library_err').css('visibility','visible').html(res);
});
});
$('.btn-createmsg').click(function(){
	// alert();
	var rec=$('#msg-form').serialize();
	// alert($id);
	$.post('../controller/messageaction.php',rec).always(function(res)
	{
	$('.msg_err').css('visibility','visible').html(res);
	$('#msg_box').val('');
	$('#msg_opt').val($('#msg_opt option:first').val());
});
});
$('.addcontact').click(function(){
	// alert();
	var rec=$('#contact-form').serialize();
	// alert($id);
	
	// alert(name);
	$.post('../controller/contactaction.php',rec).always(function(res)
	{
		$('.contact_err').css('visibility','visible').html(res);
		var name=$('#con_name').val();
		$('.contact-add').html(name);
		
	});

	});	
$('.lib-link').click(function(a){
	console.log(a);
	a.preventDefault();
	// alert();
	var res=$(this).attr("for");
	// alert(res);
	var data="libid="+res;
	$.post('../controller/getmsgaction.php',data).always(function(res){
		// alert(res);
	$('.display-msg').html(res);
});

});
$('.group_link').click(function(a){
	console.log(a);
	a.preventDefault();
	// alert();
	var res=$(this).attr("for");
	// alert(res);
	var data="groupid="+res;
	// alert(data);
	$.post('../controller/getcontactaction.php',data).always(function(res){
	$('.dis-contact').html(res);
});

});
$('.click-link').click(function(a){
	
	// alert();
});

});