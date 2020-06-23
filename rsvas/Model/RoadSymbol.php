<?php
require_once ("Model_Abstract.php");

	class RoadSymbol extends Model_Abstract
	{
		function __construct()
		{
			$this->tableName = "road_symbol";
			$this->primaryKey = "pk_road_symbol_id";
		}

		public function selectJoin()
		{
			//$this->setTableName('customer_category');
			$query = "SELECT * from {$this->getTableName()} r JOIN road_symbol_category c on r.fk_category_id = c.pk_category_id ";
			$rows = $this->getAdapter()->select($query);
			return $rows;

		}
	}

?>