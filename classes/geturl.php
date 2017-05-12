<?php 
	/**
	* 
	*/
	class GetUrl
	{
		public $url, $url_mass;
		function __construct()
		{
			$this->url = $_SERVER['REQUEST_URI'];
			$this->url_mass = explode('/', $this->url);
		}
	}
?>