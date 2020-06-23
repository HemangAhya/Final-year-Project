<?php
	include_once ('Adapter.php');
	class Model_Abstract{

		protected $tableName;
		protected $adapter;
		protected $primarykey;

		public function getAdapter(){
			if(!$this->adapter){
				$this->adapter = new Adapter();
			}
			return $this->adapter;
		}

		public function setAdapter(Adapter $adapter){
			$this->adapter = $adapter;
			return $this;
		}

		public function setTableName($tableName){
			$this->tableName = $tableName;
			return $this;
		}

		public function getTableName(){
			return $this->tableName;
		}

		public function setPrimarykey($primarykey){
			$this->primarykey = $primarykey;
			return $this;
		}

		public function getPrimarykey(){
			return $this->primarykey;
		}

		public function insert($data)
		{
			//$this->setTableName('customer_category');
			$keys = implode(",", array_keys($data));
			$values = implode(",", array_values($data));
		
			//$query = "INSERT into '{$this->getTableName()}' ($keys) values ($values)";
			
			
			 $query = "INSERT into {$this->getTableName()} ($keys) values($values)";


			
			$last_row_inserted = $this->getAdapter()->insert($query);
			return $last_row_inserted;
			
		

		}

		public function select()
		{
			//$this->setTableName('customer_category');
			$query = "select * from {$this->getTableName()}";
			$rows = $this->getAdapter()->select($query);
			return $rows;

		}

		public function delete($id)
		{	
			//$this->setTableName('customer_category');
			$query = "delete from {$this->getTableName()} where {$this->getPrimarykey()} = $id";

			$result = $this->getAdapter()->delete($query);
			return $result;
		}

		public function selectByMail($id)
		{
			//$this->setTableName('customer_category');
			$query = "select * from {$this->getTableName()} where {$this->getPrimarykey()} = '$id'";
			$row_count = $this->getAdapter()->selectCount($query);
			//print_r($rows);
			//die();

			return $row_count;
		}

		public function selectById($id)
		{
			//$this->setTableName('customer_category');
			$query = "select * from {$this->getTableName()} where {$this->getPrimarykey()} = '$id'";
			$rows = $this->getAdapter()->select($query);
			//print_r($rows);
			//die();

			return $rows;
		}

		
		public function update($data, $id)
		{
			//$this->setTableName('customer_category');
			$str = "";
				foreach ($data as $key => $value)
				{
						$str .= $key ."=".$value.",";
				}

			$str = rtrim($str, ',');
			$query = "UPDATE {$this->getTableName()} set $str where {$this->getPrimarykey()} = '$id'";
			$result = $this->getAdapter()->update($query);


			return $result;
		}
	}
	//$category = new Category();
	
?>