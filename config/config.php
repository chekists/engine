<?php
	class Config
	{
		private static $userNameDb = 'root';
		private static $userPasswordDb = '';

		private static  $userNameAdmin = 'admin';
		private static $userPasswordAdmin = '1234';

		public static  function getUserNameDb()
		{
			return self::$userNameDb;
		}
		public static  function getUserPasswordDb()
		{
			return self::$userPasswordDb;
		}
		public static  function getUserNameAdmin()
		{
			return self::$userNameAdmin;
		}
		public static  function getUserPasswordAdmin()
		{
			return self::$userPasswordAdmin;
		}
	} 
?>