<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	include_once('models/Bill_detailModel.php');

	class BillDetailController {
		function add2BillDetail(){
			$billdetail=new BillDetail();
			$abc=$billdetail->getNewId();
				foreach ($_SESSION['cart'] as $key => $value) {
					$data['id_bill']=$abc[0]['max'];
					$data['id_product']=$value['id'];
					$data['quantity']=$value['quantity'];
					$data['price'] =$value['price'];
					$data['created_at'] =date('Y-m-d H:i:s');
					print_r($data);
					 die;

					$status=$billdetail->insert($data);
				}
			header('Location:?mod=users&act=accept');
		}

		function list(){	
			$id_customer=$_GET['id_customer'];
			$id=$_GET['id_bill'];
			$billdetail=new BillDetail();
			$data =$billdetail->find1($id);
			$_SESSION['TTSP']=$data;
		// print_r($_SESSION['TTSP']);
		// die;
			header('Location:?mod=users&act=getCustomer&id_customer='.$id_customer.'&id_bill='.$id);
		}
		
	}

 ?>