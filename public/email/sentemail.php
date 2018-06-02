<?php 
  
        function send_email($email_recive,$name,$contents,$subject ){
            require "phpmailer/PHPMailerAutoload.php";
            require "phpmailer/class.phpmailer.php";
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->setLanguage('vi', '/optional/path/to/language/directory/'); 
            $mail->SMTPDebug  = 2;
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

        $msg="<p>Hóa Đơn Mua Hàng</p>
            <h1>abc</h1>
        ";
        send_email($_SESSION['TTKH'][''],$_POST['name'],$msg,'php09');
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <form action="sentemail.php" method="POST" role="form">
        <legend>Form title</legend>
    
        <div class="form-group">
            <label for="">tên: </label>
            <input type="text" class="form-control" id="" name="name">
        </div>
         <div class="form-group">
            <label for="">email: </label>
            <input type="text" class="form-control" id="" name="email">
        </div>
    
        
    
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>
</html>
<?php } ?>