<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
	include_once('models/User.php');

	class UserController 
	{
		function __construct(){
			$user= new User();
		}
		function list(){
			$user =new User();
			$data =$user->getAll();
			include_once('views/user/list.php');
		}
		function detail(){
			$user_model =new User();
			$id= $_GET['id'];
			$user = $user_model->find($id);
			include_once('views/user/detail.php');
		}
		function add(){
			$nameErr=$mobileErr=$emailErr="";
			$data=array();
			$data['name']=$data['email']=$data['mobile']="";
			include_once('views/user/add.php');
		}
		function check(){
			$nameErr=$mobileErr=$emailErr="";
			$data=array();
			function test_input($data) {
			  	$data = trim($data);
			  	$data = stripslashes($data);
			  	$data = htmlspecialchars($data);
			  	return $data;
			}
		
			if(isset($_POST['submit'])){
				$data=array();
				$data['name'] = $_POST['name'];
				$data['email']  = $_POST['email'];
				$data['mobile']  = $_POST['mobile'];
				$data['created_at'] =date('Y-m-d H:i:s');
			
				if($_POST['name']=="") {
					$nameErr="Tên sinh viên không được bỏ trống";
				}
					else $nameErr="";
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			      $nameErr = "Tên chỉ chứa kí tự và khoảng trống"; 
			    }

			    if ($_POST["email"]=="") {
				    $emailErr = "Email không được bỏ trống";
				}else {
					$email = test_input($_POST["email"]);
				    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				      $emailErr = "Email không đúng định dạng"; 
					}
				}

				if($_POST['mobile']=="") $mobileErr="Số điện thoại không được bỏ trống";
					else $mobileErr="";

				if(!preg_match('/^[0-9]{3}[0-9]{3}[0-9]{5}$/', $_POST['mobile'])&&!preg_match('/^[0-9]{3}[0-9]{3}[0-9]{4}$/', $_POST['mobile'])){
				      	$mobileErr = 'Số điện thoại có 10 hoặc 11 số';
				    }
				    echo $_POST['name'];
				if( $_POST['name']!="" && preg_match("/^[a-zA-Z ]*$/",test_input($_POST["name"])) && $_POST["email"]!="" && filter_var(test_input($_POST["email"]), FILTER_VALIDATE_EMAIL)
					&& preg_match('/^[0-9]{3}[0-9]{3}[0-9]{5}$/', $_POST['mobile']) ){
					echo "đúng ròi";
						$data=array();
						$data['name'] = $_POST['name'];
						$data['email']  = $_POST['email'];
						$data['mobile']  = $_POST['mobile'];
						$data['created_at'] =date('Y-m-d H:i:s');
						if($_FILES["avatar"]["error"] > 0){
							echo "lỗi upload images";
						}
						else {
							move_uploaded_file($_FILES["avatar"]["tmp_name"], "upload/user/" .$_FILES["avatar"]["name"]);
							$link= "upload/user/" .$_FILES["avatar"]["name"];
						}			
						$data['avatar']=$link;
						header('location: ?mod=users&act=store');
				}
			}
			include_once('views/user/add.php');
		}
		function store(){
			$nameErr=$mobileErr=$emailErr="";
			$data=array();
			function test_input($data) {
			  	$data = trim($data);
			  	$data = stripslashes($data);
			  	$data = htmlspecialchars($data);
			  	return $data;
			}
		
			if(isset($_POST['submit'])){
				$data=array();
				$data['name'] = $_POST['name'];
				$data['email']  = $_POST['email'];
				$data['mobile']  = $_POST['mobile'];
				$data['created_at'] =date('Y-m-d H:i:s');
			
				if($_POST['name']=="") {
					$nameErr="Tên không được bỏ trống";
				}
					else $nameErr="";
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			      $nameErr = "Tên chỉ chứa kí tự và khoảng trống"; 
			    }

			    if ($_POST["email"]=="") {
				    $emailErr = "Email không được bỏ trống";
				}else {
					$email = test_input($_POST["email"]);
				    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				      $emailErr = "Email không đúng định dạng"; 
					}
				}

				if($_POST['mobile']=="") $mobileErr="Số điện thoại không được bỏ trống";
					else $mobileErr="";

				if(!preg_match('/^[0-9]{3}[0-9]{3}[0-9]{5}$/', $_POST['mobile'])&&!preg_match('/^[0-9]{3}[0-9]{3}[0-9]{4}$/', $_POST['mobile'])){
				      	$mobileErr = 'Số điện thoại có 10 hoặc 11 số';
				    }
				if( $_POST['name']!="" && preg_match("/^[a-zA-Z ]*$/",test_input($_POST["name"])) && $_POST["email"]!="" && filter_var(test_input($_POST["email"]), FILTER_VALIDATE_EMAIL)
					&& preg_match('/^[0-9]{3}[0-9]{3}[0-9]{5}$/', $_POST['mobile']) ){
						$data=array();
						$data['name'] = $_POST['name'];
						$data['email']  = $_POST['email'];
						$data['mobile']  = $_POST['mobile'];
						$data['created_at'] =date('Y-m-d H:i:s');
						if($_FILES["avatar"]["error"] > 0){
							echo "lỗi upload images";
						}
						else {
							move_uploaded_file($_FILES["avatar"]["tmp_name"], "upload/user/" .$_FILES["avatar"]["name"]);
							$link= "upload/user/" .$_FILES["avatar"]["name"];
						}			
						$data['avatar']=$link;
						$user_model =new User();
						$status=$user_model->insert($data);
						setcookie('add-customer',"thêmabc", time()+3);
						header('location: ?mod=users&act=list');
				}
			}
			include_once('views/user/add.php');
		}
		function add1(){
			$nameErr=$mobileErr=$emailErr="";
			$data=array();
			$data['name']=$data['email']=$data['mobile']="";
			include_once('views/Sale/customeradd.php');
		}
		function store1(	){
			$nameErr=$mobileErr=$emailErr="";
			$data=array();
			function test_input($data) {
			  	$data = trim($data);
			  	$data = stripslashes($data);
			  	$data = htmlspecialchars($data);
			  	return $data;
			}
		
			if(isset($_POST['submit'])){
				$data=array();
				$data['name'] = $_POST['name'];
				$data['email']  = $_POST['email'];
				$data['mobile']  = $_POST['mobile'];
				$data['created_at'] =date('Y-m-d H:i:s');
			
				if($_POST['name']=="") {
					$nameErr="Tên không được bỏ trống";
				}
					else $nameErr="";
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			      $nameErr = "Tên chỉ chứa kí tự và khoảng trống"; 
			    }

			    if ($_POST["email"]=="") {
				    $emailErr = "Email không được bỏ trống";
				}else {
					$email = test_input($_POST["email"]);
				    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				      $emailErr = "Email không đúng định dạng"; 
					}
				}

				if($_POST['mobile']=="") $mobileErr="Số điện thoại không được bỏ trống";
					else $mobileErr="";

				if(!preg_match('/^[0-9]{3}[0-9]{3}[0-9]{5}$/', $_POST['mobile'])&&!preg_match('/^[0-9]{3}[0-9]{3}[0-9]{4}$/', $_POST['mobile'])){
				      	$mobileErr = 'Số điện thoại có 10 hoặc 11 số';
				    }
				if( $_POST['name']!="" && preg_match("/^[a-zA-Z ]*$/",test_input($_POST["name"])) && $_POST["email"]!="" && filter_var(test_input($_POST["email"]), FILTER_VALIDATE_EMAIL)
					&& preg_match('/^[0-9]{3}[0-9]{3}[0-9]{5}$/', $_POST['mobile']) ){
						$data=array();
						$data['name'] = $_POST['name'];
						$data['email']  = $_POST['email'];
						$data['mobile']  = $_POST['mobile'];
						$data['created_at'] =date('Y-m-d H:i:s');
						if($_FILES["avatar"]["error"] > 0){
							echo "lỗi upload images";
						}
						else {
							move_uploaded_file($_FILES["avatar"]["tmp_name"], "upload/user/" .$_FILES["avatar"]["name"]);
							$link= "upload/user/" .$_FILES["avatar"]["name"];
						}			
						$data['avatar']=$link;
						$user_model =new User();
						$status=$user_model->insert($data);
						setcookie('customeradd',"thêmabc", time()+3);
						header('location: ?mod=sale&act=cart');
				}
			}
			include_once('views/Sale/customeradd.php');
		}
		function delete(){
			if(isset($_GET['id'])){
				$id=$_GET['id'];
				$user_model =new User();
				$user_model->destroy($id);
				setcookie('deleteuser','XÓA THÀNH CÔNG',time()+3);
				header('location: ?mod=users&act=list');
			}
		}
		function edit(){
			$nameErr=$emailErr=$mobileErr="";
			if(isset($_GET['id'])){
				$id=$_GET['id'];
				$user_model =new User();
				$data=$user_model->find($id);
				include_once('views/user/update.php');
			}
		}
		function update(){
			$nameErr=$mobileErr=$emailErr="";
			$data=array();
			function test_input($data) {
			  	$data = trim($data);
			  	$data = stripslashes($data);
			  	$data = htmlspecialchars($data);
			  	return $data;
			}
		
			if(isset($_POST['submit'])){
				$data=array();
				$data['name'] = $_POST['name'];
				$data['email']  = $_POST['email'];
				$data['mobile']  = $_POST['mobile'];
				$data['created_at'] =date('Y-m-d H:i:s');
			
				if($_POST['name']=="") {
					$nameErr="Tên sinh viên không được bỏ trống";
				}
					else $nameErr="";
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			      $nameErr = "Tên chỉ chứa kí tự và khoảng trống"; 
			    }

			    if ($_POST["email"]=="") {
				    $emailErr = "Email không được bỏ trống";
				}else {
					$email = test_input($_POST["email"]);
				    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				      $emailErr = "Email không đúng định dạng"; 
					}
				}

				if($_POST['mobile']=="") $mobileErr="Số điện thoại không được bỏ trống";
					else $mobileErr="";

				if(!preg_match('/^[0-9]{3}[0-9]{3}[0-9]{5}$/', $_POST['mobile'])&&!preg_match('/^[0-9]{3}[0-9]{3}[0-9]{4}$/', $_POST['mobile'])){
				      	$mobileErr = 'Số điện thoại có 10 hoặc 11 số';
				    }
				if( $_POST['name']!="" && preg_match("/^[a-zA-Z ]*$/",test_input($_POST["name"])) && $_POST["email"]!="" && filter_var(test_input($_POST["email"]), FILTER_VALIDATE_EMAIL)
					&& preg_match('/^[0-9]{3}[0-9]{3}[0-9]{5}$/', $_POST['mobile']) ){
						
						$data['id'] = $_POST['id'];
						$data['name'] = $_POST['name'];
						$data['email']=$_POST['email'];
						$data['mobile'] = $_POST['mobile'];
						$data['updated_at'] = date('Y-m-d H:i:s');

						if($_FILES["avatar"]["error"] > 0){
							echo "lỗi upload images";
						}
						else {
							move_uploaded_file($_FILES["avatar"]["tmp_name"], "upload/user/" .$_FILES["avatar"]["name"]);
							$link= "upload/user/" .$_FILES["avatar"]["name"];
						}
						$data['avatar']=$link;
						setcookie('updateuser','CẬP NHẬT THÔNG TIN THÀNH CÔNG',time()+3);
						print_r($data);
						$user_model =new User();
						$user_model->update($data);
						header('location: ?mod=users&act=list');
				}
			}
			include_once('views/user/update.php');
		}
		function checkbill(){
			if (isset($_POST['submit'])) {
				$email = $_POST['email'];
				$user_model = new User();
				
				$row = $user_model->check($email);
				if ($row==1) {
					$_SESSION['checkbill'] = true;
					header('location: ?mod=users&act=bill');
				}else{
					header('location: ?mod=users&act=add1');
				}
			}
		}

		function bill(){
			include_once('views/Sale/bill1.php');
		}
		function accept(){
			if(isset($_SESSION['cart'])){
				if(isset($_SESSION['customer'])){
					$user =new User();
					$data =$user->totalmoney();
					unset($_SESSION['cart']);
					unset($_SESSION['customer']);
					
				setcookie('acceptbuy',"thêmabc", time()+3);
				}
			}
			header('Location:?mod=products&act=customerView');
		}
		function getCustomer(){
			$id_bill=$_GET['id_bill'];
			$id=$_GET['id_customer'];
			$user= new User();
			$data[]=$user->find($id);
			$_SESSION['TTKH']=$data;

			// print_r($data);
			// print_r($_SESSION['TTKH']);
			// die;
			header('Location:?mod=products&act=getProduct&id_bill='.$id_bill);
		}
	}
		
 ?>