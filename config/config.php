<?php
	class Config
	{
		private $userNameDb = 'root';
		private $userPasswordDb = '';

		private $userNameAdmin = 'admin';
		private $userPasswordAdmin = '1234';

		public function getUserNameDb()
		{
			return $this->userNameDb;
		}
		public function getUserPasswordDb()
		{
			return $this->userPasswordDb;
		}
		public function getUserNameAdmin()
		{
			return $this->userNameAdmin;
		}
		public function getUserPasswordAdmin()
		{
			return $this->userPasswordAdmin;
		}
	} 
?>