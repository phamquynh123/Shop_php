<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	include_once('models/Product.php');

	class ProductController {
		
		function __construct(){
			$pro= new Product();
		}
		function list(){
			$pro= new Product();
			$data =$pro->getAll();
			include_once('views/product/list.php');
		}
		function detail(){
			$pro= new Product();
			$id= $_GET['id'];
			$pro = $pro->find($id);
			include_once('views/product/detail.php');
		}
		function add(){
			include_once('views/product/add.php');
		}
		function store(){
			$data=array();
			$data['name'] = $_POST['name'];
			$data['quantity']  = $_POST['quantity'];
			$data['price']  = $_POST['price'];
			$data['created_at'] =date('Y-m-d H:i:s');
			if($_FILES["avatar"]["error"] > 0){
				echo "lỗi upload images";
			}
			else {
				move_uploaded_file($_FILES["avatar"]["tmp_name"], "upload/product/" .$_FILES["avatar"]["name"]);
				$link= "upload/product/" .$_FILES["avatar"]["name"];
			}			
			$data['avatar']=$link;

			$pro= new Product();
			$status=$pro->insert($data);
			header('location: ?mod=products&act=list');
		}
		function delete(){
			if(isset($_GET['id'])){
				$id=$_GET['id'];
				$pro= new Product();
				$pro->destroy($id);
				header('location: ?mod=products&act=list');
			}

		}
		function edit(){
			if(isset($_GET['id'])){
				$id=$_GET['id'];
				$pro= new Product();
				$data=$pro->find($id);
				include_once('views/product/update.php');
			}
		}
		function update(){
			$data=array();
			if(isset($_POST['submit'])){
				$data['id'] = $_POST['id'];
				$data['name'] = $_POST['name'];
				$data['quantity']=$_POST['quantity'];
				$data['price'] = $_POST['price'];
				$data['updated_at'] = date('Y-m-d H:i:s');
			}
			if($_FILES["avatar"]["error"] > 0){
				echo "lỗi upload images";
			}
			else {
				move_uploaded_file($_FILES["avatar"]["tmp_name"], "upload/product/" .$_FILES["avatar"]["name"]);
				$link= "upload/product/" .$_FILES["avatar"]["name"];
			}
			$data['avatar']=$link;
			$pro= new Product();
			$pro->update($data);
			header('location: ?mod=products&act=list');
		
		}

		function customerView(){
			$pro= new Product();
			$data =$pro->getAll();
			include_once('views/layout/customerView.php');
		}
		function getProduct(){
			$id=$_GET['id_bill'];
			$pro= new Product();
			$data1[]=$pro->find($id);
			$_SESSION['TTSP1']=$data1;
			// print_r($_SESSION['TTSP']);
			// die;
			include_once('views/Sale/bill.php');
		}
		
	}
		
 ?>