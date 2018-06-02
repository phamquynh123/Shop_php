<?php 
	class Connection{
		public $conn;
		public function __construct(){
			$servername="localhost";
			$username="root"; //ten dang nhap
			$password="";// mat khau rong
			$dbname="blog.zent";//db muôn kết nối

			//tạo ra ke noi den csdl 
			$this->conn= new mysqli($servername,$username,$password,$dbname);
			//set to read document by vietnamese
			$this->conn->set_charset('utf8');

			//check connection
			if($this->conn ->connect_error){
				die("connection fail : " .$this->conn->connect_error);
			}
			$query="SELECT * FROM 'product'";//câu lệnh truy vấn CSDL
			$result =$this->conn->query($query);//thuc thi câu lệnh truy vấn CSDL
		}
	}
?>