<?php 
	class Load
	{
		private $name_tpl;
		public $data_tpl;
		function __construct($name_tpl = null)
		{
			$this->name_tpl = $name_tpl;
		}
		function load()
		{
			return $this->data_tpl = file_get_contents('view/'.$this->name_tpl.'.tpl');
		}
		function clearTplBuffer()
		{
			$this->data_tpl = '';
		}
	}
?>