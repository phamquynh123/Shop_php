<?php 
	include_once ('Connection.php');

	/**
	* 
	*/
	class Model 
	{
		public $conn;
		public $table;
		public $primary_key;
		private $sql;
		
		function __construct()
		{
			$cnt=new Connection();
			$this->conn= $cnt->conn;
		}
		function getAll(){
			$query= 'SELECT * FROM ' .$this->table;
			$result= $this->conn-> query($query);
			$data=array();
			while ($row= $result->fetch_assoc() ){
				$data[]=$row;
			};
			return $data;
		}
		function find($id){
			$query= 'SELECT * FROM ' .$this->table. ' WHERE '  .$this->primary_key. '=' .$id;
			$result= $this->conn-> query($query);
			return $result->fetch_assoc();
		}
		function find1($id){
			$query= 'SELECT * FROM ' .$this->table. ' WHERE '  .$this->primary_key. '=' .$id;
			// echo $query; die;
			$result= $this->conn-> query($query);
			$data=array();

			while ($row= $result->fetch_assoc() ){
				$data[]=$row;
			}
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";

			// die;
			return $data;
		}
		function setQuery($sql)
		{
			$this->sql = $sql;
			// echo $sql;
		}
		function addTabel()
		{
				$this->conn->query($this->sql);
				return true;
		}
		public function getArrayTable(){
			$tableList = array();
			$result = $this->conn->query($this->sql);
			while($row = $result->fetch_assoc())
			{
				array_push($tableList,$row);
			}
			return $tableList;
		}

		function insert($data){
			$field="";
			$values="";
			foreach ($data as $key => $value) {
				$field .=$key. ',' ;
				$values .='"'.$value. '",' ;	
			}
			$field=trim($field ,',');
			$values=trim($values ,',');
			$query='INSERT INTO '. $this->table.'('.$field.')' . ' VALUES ( '.$values .' )';
			// echo $query; die;
			$result = $this->conn->query($query);
			return $result;
		}

		public function destroy($id){
			$query='DELETE FROM '.$this->table.' WHERE ' .$this->primary_key. '=' .$id;
			return $this->conn-> query($query);
		}
		public function update($data){
			$abc="";
			foreach ($data as $key => $value) {
				$abc .= $key." = '".$value ." ' ,";
			}
			$abc=trim($abc, ' , ');
			$query =" UPDATE  $this->table SET $abc WHERE id = ".$data['id'] ;
			$result = $this->conn->query($query);
			return $result;
		}
		public function totalmoney(){
			$query='UPDATE user SET tongtien=' .$_SESSION['customer']['tongtien']. ' WHERE id=' .$_SESSION['customer']['id'];
				$result = $this->conn->query($query);
				return $result;
		}
	}


 ?> 