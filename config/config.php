<?php
	class Config
	{
		private static $userNameDb = 'root';
		private static $userPasswordDb = '';

		private static $userNameAdmin = 'admin';
		private static $userPasswordAdmin = '1234';

		private static $allowedGroups = ['news','photos', 'videos'];
		private static $additionalGroups = ['top_menu','left_menu', 'free_block'];

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
		public static  function getAllowedGroups()
		{
			return self::$allowedGroups;
		}
		public static  function getAdditionalGroups()
		{
			return self::$additionalGroups;
		}
	} 
?>