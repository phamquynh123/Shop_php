<?php 
	include_once('Model.php');
	/**
	* 
	*/
	class BillDetail extends Model
	{
		public $table='bill_detail';
		public $primary_key='id_bill';
		function getNewId()
		{
			$sql = "SELECT MAX(id_bill) as max FROM `bill` ";
			$this->setQuery($sql);
			$this->addTabel();
			return $this->getArrayTable();
			
		}
		
	}

 ?>