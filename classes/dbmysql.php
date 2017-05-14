<?php 
	/**
	* 
	*/
	class DbMySql
	{
		private $DbMySql_obj;
		private function __construct($dbmysql_user, $dbmysql_password,$dbmysql_dbName)
		{
			$this->$DbMySql_obj = new mysqli("localhost", $dbmysql_user, $dbmysql_password, $dbmysql_dbName);
		}

		public function getDbMySql_obj()
		{
			return $DbMySql_obj;
		}
	}
?>