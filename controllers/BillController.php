<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	include_once('models/Bill.php');

	class BillController {
		function add2Bill(){
			$data=array();
			$data['id_customer']=$_SESSION['customer']['id'];
			$data['total']=$_SESSION['customer']['tongtien'];
			$data['created_at'] =date('Y-m-d H:i:s');
			$bill= new Bill();
			$data=$bill->insert($data);
			header('Location:?mod=billdetail&act=add2BillDetail	');
		}
		function list(){
			$bill =new Bill();
			$data =$bill->getAll();
			include_once('views/Sale/bill_adminView.php');
		}
	}

 ?>