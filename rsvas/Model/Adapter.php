<?php
	class Adapter{

		protected $connect ;
		public function setConnect($connect){
			$this->connect = $connect;
			return $this;
		}

		public function getConnect(){
			return $this->connect;
		}

		public function doConnection(){
			$connect = new Mysqli('localhost','root','','rsvas');
			$this->setConnect($connect);
			return $this;
		}

		


		public function insert($query)
		{
			
			
			$this->doConnection();
			//print_r($this->getConnect());
			$this->getConnect()->query($query);
			$last_row = $this->connect->insert_id;
			return $last_row;
		}		

		public function select($query)
		{
			
			$this->doConnection();
			$result = $this->getConnect()->query($query);
			//echo $x = $result->num_rows;
			$rows = array();
        
        	while ($row = $result->fetch_assoc()) 
        	{
            	$rows[] = $row;
        	}

        return $rows;
		}

		public function selectCount($query)
		{
			$this->doConnection();
			$result = $this->getConnect()->query($query);
			$row_count = $result->num_rows;
			

        	return $row_count;
		}



		public function delete($query)
		{
			$this->doConnection();
			$result = $this->getConnect()->query($query);
			return $result;
		}

		public function update($query)
		{
			$this->doConnection();
			$result = $this->getConnect()->query($query);
			return $result;	
		}

		public function queryCount($query)
		{
			echo $query;
			$this->doConnection();
			$result = $this->getConnect()->query($query);
			$arr = $this->connect->mysqli_fetch_array($result);
			print_r($arr);
			//print_r($result);
			//echo $rowCount = $result->mysqli_num_rows();
			//return $rowCount;
		}
	}
	//$adapter = new Adapter();
	
?>