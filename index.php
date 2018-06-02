<?php 
	session_start();
	// session_destroy();
	$mod = "products"; 
	$act="customerView";
	if(isset($_GET['mod'])){
		$mod=$_GET['mod'];
	}

	if(isset($_GET['act'])){
		$act=$_GET['act'];
		
	}else {
		$act='customerView';
	}
	switch ($mod) {
		case "login":{
			include_once("controllers/LoginController.php");
			$login=new LoginController();
			$login->login();
			switch ($act) {
				case 'logout':
					$login->logout();
					break;
				
				default:
					echo "abc";
					break;
			}
			break;
		}
		case 'formLogin':{
			include_once("controllers/LoginController.php");
			$login=new LoginController();
			$login->formLogin();
			break;
		}
		case "index":{
			include_once("views/layout/home.php");
			break;
		}
		case 'category':
			include_once('controllers/CategoryController.php');
			$uctl=new CategoryController();
			switch ($act) {
				case 'list':
					$uctl->list();
					break;
				case 'detail':
					$uctl->detail();
					break;
				case 'add':
					$uctl->add();
					break;
				// case 'store':
				// 	$uctl->store();
				// 	break;

				// case 'delete':
				// 	$uctl->delete();
				// 	break;
				// case 'edit':
				// 	$uctl->edit();
				// 	break;
				// case 'update':
				// 	$uctl->update();
				// 	break;
				default:
					echo "không tồn tại chức năng này";
					break;
			}

			break;

		case 'users':
			include_once('controllers/UserController.php');
			$uctl=new UserController();
			switch ($act) {
				case 'customerView':
					$uctl->customerView();
					break;
				case 'list':
					$uctl->list();
					break;
				case 'detail':
					$uctl->detail();
					break;
				case 'add':
					$uctl->add();
					break;
				case 'add1':
					$uctl->add1();
					break;
				case 'store':
					$uctl->store();
					break;
				case 'store1':
					$uctl->store1();
					break;

				case 'delete':
					$uctl->delete();
					break;
				case 'edit':
					$uctl->edit();
					break;
				case 'update':
					$uctl->update();
					break;
				case 'check':
					$uctl->check();
					break;
				default:
					echo "không tồn tại chức năng này";
					break;
				case 'pay':
					$uctl->pay();
					break;
					
				case 'checkbill':
					$uctl->checkbill();
					break;
				case 'bill':
					$uctl->bill();
					break;
				case 'accept':
					$uctl->accept();
					break;
				case 'getCustomer':
					$uctl->getCustomer();
					break;
			}

			break;

		case 'products':
			include_once('controllers/ProductController.php');
			$pctl=new ProductController();
			switch ($act) {
				case 'list':
					$pctl->list();
					break;
				case 'detail':
					$pctl->detail();
					break;
				case 'add':
					$pctl->add();
					break;
				case 'store':
					$pctl->store();
					break;

				case 'delete':
					$pctl->delete();
					break;
				case 'edit':
					$pctl->edit();
					break;
				case 'update':
					$pctl->update();
					break;
				case 'customerView':
					$pctl->customerView();
					break;
				case 'getProduct':
					$pctl->getProduct();
					break;
				default:
					echo "không tồn tại chức năng này";
					break;
			}

			break;
		
		case 'sale':
			include_once('controllers/SaleController.php');
			$sctl=new SaleController();
			switch ($act) {
				case 'list':
					$sctl->list();
					break;
				case 'add2cart':
					$sctl->add2cart();
					break;
				case 'cart':
					$sctl->cart();
					break;
				case 'add1':
					$sctl->add1();
					break;
				case 'minus1':
					$sctl->minus1();
					break;
				case 'delete':
					$sctl->delete();
					break;
				case 'detail':
					$sctl->detail();
					break;
				case 'sentemail':
					$sctl->sentemail( $_SESSION['TTKH']['0']['email'] , $_SESSION['TTKH']['0']['name'] ,$msg, 'php09');
					header('Location: ?mod=bill&act=list');
					break;
				case 'inhoadon':
					$sctl->inhoadon();
					break;
				
				default:
					echo "k tồn tại của cart";
					break;
			}
			break;

		case 'bill':
			include_once('controllers/BillController.php');
			$bctl=new BillController();
			switch ($act) {
				case 'add2Bill':
					$bctl->add2Bill();
					break;

				case 'list':
					$bctl->list();
					break;

		
				default:
					echo "không tồn tại chức năng trong hóa đơn";
					break;
			}

			break;

		case 'billdetail':
			include_once('controllers/Bill_detaiController.php');
			$bdctl=new BillDetailController();
			switch ($act) {
				case 'add2BillDetail':
					$bdctl->add2BillDetail();
					break;
				case 'list':
					$bdctl->list();
					break;
		
				default:
					echo "không tồn tại chức năng trong hóa đơn";
					break;
			}

			break;

		default:
			echo "404";
			break;
	}
 ?>