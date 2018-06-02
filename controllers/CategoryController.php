<?php 
	/**
	* 
	*/
	include 'models/Category.php';
	// include 'models/Product.php';
	class CategoryController 
	{
		public $category_model;
		function __construct()
		{
			$this->category_model=new Category();
		}

		//danh sách danh muc
		public function list(){
			$data=$this->category_model->getAll();
			include 'views/category/list.php';
		}

		public function detail(){
			if(isset($_GET['id'])){
				$id=$_GET['id'];
				$data =$this->category_model->products($id);
				include('views/category/listProduct.php');
			}
		}
		public function add(){
			
		}
	}
?>