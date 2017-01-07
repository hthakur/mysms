<?php
	include_once 'db_parameter.php';

	abstract class db_connect implements db_parameter, db_function{
		var $con="";
		
		function __construct(){
		if(session_id()==''){
			session_start();
		}
		$this->con=mysqli_connect(db_parameter::HOST,db_parameter::USER,db_parameter::PASS,db_parameter::DATABASE);
		// echo "<pre>";
		// print_r($this->con);
	}
	function __destruct(){
		$result=mysqli_close($this->con);
	}
}
?>