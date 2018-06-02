<?php 

function send_email($email_recive,$name,$contents,$subject ){
        //https://www.google.com/settings/security/lesssecureapps
        // Khai báo thư viên phpmailer
        require "phpmailer/PHPMailerAutoload.php";
        require "phpmailer/class.phpmailer.php";
        // Khai báo tạo PHPMailer
        $mail = new PHPMailer();
        //Khai báo gửi mail bằng SMTP
        $mail->IsSMTP();
        //Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
        // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
        // 1 = Thông báo lỗi ở client
        // 2 = Thông báo lỗi cả client và lỗi ở server
        // To load the French version
        $mail->setLanguage('vi', '/optional/path/to/language/directory/'); //vi tiếng việt en tiếng anh
        $mail->SMTPDebug  = 2;
        $mail->CharSet="UTF-8";
        $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
        $mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
        $mail->Port       = 587; // cổng để gửi mail
        $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
        $mail->SMTPAuth   = true; //Xác thực SMTP
        $mail->Username   = "quynhzent@gmail.com"; // Tên đăng nhập tài khoản Gmail
        $mail->Password   = "quynhzent123"; //Mật khẩu của gmail
        $mail->SetFrom("quynhzent@gmail.com", "Zent Group"); // Thông tin người gửi
        $mail->AddReplyTo("quynhzent@gmail.com","Zent Group");// Ấn định email sẽ nhận khi người dùng reply lại.
        $mail->AddAddress($email_recive, $name);//Email của người nhận
        $mail->Subject = $subject; //Tiêu đề của thư
        $mail->MsgHTML($contents); //Nội dung của bức thư.
        // $mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
        // Gửi thư với tập tin html
        $mail->AltBody = "Nội dung thư";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
        //$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
            )
        );
        //Tiến hành gửi email và kiểm tra lỗi
        if(!$mail->Send()) {
         // echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
            return false;
        } else {
            return true;
          //echo "Đã gửi thư thành công!";
        }
    } 


    $name="quỳnh-zent";
    $msg="
?>
        <h1 style="text-align: center">CHI TIẾT ĐƠN HÀNG <?php echo $id; ?></h1>
            

    <table class="table table-hover">
        <thead>
            <tr>
                <th>INFORMATION</th>
                <th>DETAIL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>ID</th>
                <td><?php echo $_SESSION['TTKH'][0]['id'] ?></td>
            </tr>
            <tr>
                <th>NAME</th>
                <td><?php echo $_SESSION['TTKH'][0]['name'] ?></td>
            </tr>
            <tr>
                <th>EMAIL</th>
                <td><?php echo $_SESSION['TTKH'][0]['email'] ?></td>
            </tr>
            <tr>
                <th>MOBILE</th>
                <td><?php echo $_SESSION['TTKH'][0]['mobile'] ?></td>
            </tr>
            <tr>
                <th>CREATED_AT</th>
                <td><?php echo $_SESSION['TTKH'][0]['created_at'] ?></td>
            </tr>
            <tr>
                <th>UPDATED_AT</th>
                <td><?php echo $_SESSION['TTKH'][0]['updated_at'] ?></td>
                
            </tr>
            <tr>
                <th>AVATAR</th>
                <td><img src="<?php echo $_SESSION['TTKH'][0]['avatar'] ?>" alt="" class="img-detail-product"></td>
            </tr>
        </tbody>
    </table>


    <h1 style="text-align: center">Sản Phẩm Đã Mua</h1>
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá tiền</th>
                <th>Số lượng</th>
                <th>thành tiền</th>
                <th>sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(isset($_SESSION['TTSP'])){
                foreach ($_SESSION['TTSP'] as $code => $product) { ?>
            
                <tr>
                    <td><?php echo $product['id'] ?></td>
                    <td><?php echo $product['name'] ?></td>
                     <td><?php echo number_format($product['price']) ?></td>
                    <td><?php echo $product['quantity'] ?></td>
                    <td><?php echo number_format($product['price']*$product['quantity']) ; ?></td>
                    <td> <img src="<?php echo $product['avatar'] ?>" alt="" class="img-pro"> </td>
                    
                </tr>
            <?php } ?>

            
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2"></th>
                <th colspan="2">Tổng tiền</th>
                <th>
                    
                    <?php
                        $tong=0;
                        foreach ($_SESSION['TTSP'] as $code => $product){  
                            $tong+=$product['price']*$product['quantity'];
                        }
                        echo number_format($tong);}
                    ?>
                </th>
                    
            </tr>
        </tfoot>
    </table>
            


    ";
    send_email($_SESSION['TTKH'][0]['email'],$($_SESSION['TTKH'][0]['name'],$msg,'php09');
?>