<?php  
	/**
	* 
	*/
	require_once '/model/additional.php';
	class Additional
	{
		private $tpl;	
		private $additionalGroups;
		function __construct($load)
		{
			$this->tpl = $load;
			$this->additionalGroups = Config::getAdditionalGroups();
		}
		public function getAdditionalGroups()
		{
			foreach ($additionalGroups as $key => $value) {
				
			}
		}
	}
?>