<?php 
class Post
{
	private  $post;

	public function __construct()
	{
		$this->post = $_POST;
	}
	public function getPost($key = null)
	{
	 	if ($key) {
	 		return trim($this->post[$key]);
	 	}
	 	else
	 	{
	 		return $this->post;	
	 	}
	}
}

?>