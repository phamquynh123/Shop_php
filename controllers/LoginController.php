<?php 
	// if(isset($_POST['login'])){
	// 	if($_POST['email']=="phamquynh047@gmail.com" && $_POST['password']=="1234"){
	// 		$mod="index";
	// 		$act="list";
	// 		header('Location:?mod=index');
	// 	}else{
	// 		setcookie('loginAdmin',"thêm vào giỏ hàng thành công", time()+3);
	// 	}
	// }
	include_once('models/User.php');

	class LoginController{
		public $user_model;
		function __construct(){
			$this->user_model= new User();
		}
		public function login(){
			if (isset($_POST['login'])) {
				$email = $_POST['email'];
				$password = $_POST['password'];
				$user_model = new User();
				$row = $this->user_model->login($email,$password);
				if ($row==1) {
					$_SESSION['login'] = true;
					header('location: ?mod=index');
				}else{
					$_SESSION['login'] = false;
				}
			}
			include_once("views/layout/login.php");
		}

		public function formLogin(){
			include_once("views/layout/login.php");
		}
		function logout(){
			if(isset($_function['login'])){
				unset($_SESSION['login']);
				header('location:?mod=formLogin');
			}
		}
	}
		// include_once('views/layout/login.php');	


 ?>