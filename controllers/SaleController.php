<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	include_once('models/Product.php');
	
	$msg=' XÁC NHẬN ĐƠN HÀNG THÀNH CÔNG
		Hóa đơn ua hàng của bạn
		 <main class="app-content">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"><i class="fa fa-globe"></i>QUỲNH <3</h2>
                </div>
                <div class="col-6">
                  <h5 class="text-right">Date: 01/01/2016</h5>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-4 col-md-4">From
                  <address><strong>Zent shop</strong><br>số 2 ngõ trại cá<br>Email: quynhzent@gmail.com</address>
                </div>
           
	';
	
// include_once('models/User.php');
	class SaleController {
		public $pro;
		public function __construct(){
			$this->pro = new Product();
		}
		function list(){
			$data = $this->pro->getAll();
			$this->pro->getAll();
			include_once('views/Sale/listProduct.php');
		}
		function cart(){
			$data = $this->pro->getAll();
			include_once('views/Sale/cart.php');
		}
		function add2cart(){
			$abc= $this->pro->find($_GET['id']);
			if(isset($_GET['id'])){
				if(isset($_SESSION['cart'][$_GET['id']])){
					$_SESSION['cart'][$_GET['id']]['quantity'] ++;
				}else{
					$_SESSION['cart'][$_GET['id']]=$abc;
					$_SESSION['cart'][$_GET['id']]['quantity']=1;
				}
			}
			setcookie('ok',"thêm vào giỏ hàng thành công", time()+3);
			// print_r($_SESSION['cart']);
			header('Location:?mod=products&act=customerView');
		}
		
		function add1(){
			if(isset($_SESSION['cart'][$_GET['id']])){
				$_SESSION['cart'][$_GET['id']]['quantity']++;
			}
			// echo $_SESSION['cart'][$_GET['id']]['quantity'];
			header('Location: ?mod=sale&act=cart');
		}
		function minus1(){
			if (isset($_GET['id'])) {
				$code = $_GET['id'];
				if (isset($_SESSION['cart'][$code])) {
					if ($_SESSION['cart'][$code]['quantity'] >  1) {
						$_SESSION['cart'][$code]['quantity']--;
					}else{
						unset($_SESSION['cart'][$code]);
					}
				}
			}
			header('Location:?mod=sale&act=cart');
		}
		function delete(){
			if(isset($_GET['id'])){
				if (isset($_SESSION['cart'][$_GET['id']])) {
					unset($_SESSION['cart'][$_GET['id']]);
				}
			}
			header('location:?mod=sale&act=cart');
		}
		function detail(){
			include_once('views/sale/detail.php');
		}

		function sentemail ($email_recive,$name,$contents,$subject ){
		
			require "public/email/phpmailer/PHPMailerAutoload.php";
            require "public/email/phpmailer/class.phpmailer.php";
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->setLanguage('vi', '/optional/path/to/language/directory/'); 
            $mail->SMTPDebug  = 0;
            $mail->CharSet="UTF-8";
            $mail->Host       = "smtp.gmail.com"; 
            $mail->Port       = 587; 
            $mail->SMTPSecure = "tls";
            $mail->SMTPAuth   = true;
            $mail->Username   = "quynhzent@gmail.com";
            $mail->Password   = "quynhzent123";
            $mail->SetFrom("quynhzent@gmail.com", "Zent Group");
            $mail->AddReplyTo("quynhzent@gmail.com","Zent Group");
            $mail->AddAddress($email_recive, $name);
            $mail->Subject = $subject; 
            $mail->MsgHTML($contents); 
            $mail->AddAttachment("views/Sale/inhoadon.php","picture");
            $mail->AltBody = "Nội dung thư";
            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
                )
            );
            if(!$mail->Send()) {
                return false;
            } else {
            	
                return true;
            }
            
        }
        function inhoadon(){
			include_once('views/sale/inhoadon.php');
		}
	}


	
?>
