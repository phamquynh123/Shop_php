<?php 
	// include ('Connection.php');
	include_once('Model.php');

	class User extends Model
	{
		public $table='user';
		public $primary_key='id';
		function login($email,$password){
			
			$password = $password;
			$query = "SELECT * FROM  user WHERE email='".$email."' and password= '".$password."' ";
			$result = $this->conn->query($query);
			$row = $result->fetch_assoc();
			
			return ($row != null);
		}
		function check($email){
			$query = "SELECT * FROM  user WHERE email='".$email."' ";
			$result = $this->conn->query($query);
			
			$row = $result->fetch_assoc();
		
			$_SESSION['customer'] = $row;
			return ($row != null);
		}
	}

	
 ?>