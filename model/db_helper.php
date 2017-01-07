<?php
	include_once 'db_connect.php';
	abstract class db_helper extends db_connect{
		function insert($table,$col){
			// echo $table;
			// echo "<pre>";
			// print_r($col);
			$val="'".implode("','", $col)."'";
			// echo $val;
			$colname=array_keys($col);
			// echo "<pre>";
			// print_r($colname);
			$colname1=implode(',', $colname);
			// echo $colname1;
			$str="insert into $table ($colname1) values ($val)";
			$result=mysqli_query($this->con,$str) or die(mysqli_error($this->con));
			// var_dump($result);
		}
		function select($table,$col,$condition){
			$str="select $col from $table where $condition";
			// echo $str;
			$result=mysqli_query($this->con,$str) or die(mysqli_error($this->con));
			// return $result;
			if($result->num_rows>0){
				while($ans=$result->fetch_object())
				{
					$data[]=$ans;
				}
				return $data;
			}
			else{
				return 0;
			}
		}
		function delete($table,$condition){
			$str="delete from $table where $condition";
			$result=mysqli_query($this->con,$str) or die(mysqli_error($this->con));
			// var_dump($result);
		}
		function update(){
			
		}
	}

?>