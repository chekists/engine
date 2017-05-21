<?php 
	/**
	* 
	*/
	class GetUrl
	{
		public $url, $url_mass;
		function __construct()
		{
			//echo "string";
			$this->url = $_SERVER['REQUEST_URI'];
			$this->url_mass = explode('/', $this->url);
		}
		private function getParametrs($get = [])
		{
			foreach ($get as $key => $value) {
				$this->$url_mass['get'][$key] = $value; 
			}
		}
	}
?>