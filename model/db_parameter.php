<?php
	interface db_parameter{
		const HOST ="localhost";
		const USER="root";
		const PASS="";
		const DATABASE="mysms";
	}
	interface db_function{
		function insert($table,$col);
		function select($table,$col,$condition);
		function delete($table,$condition);
		function update();
	}


?>