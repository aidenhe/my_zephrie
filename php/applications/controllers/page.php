<?php
class page extends Mvc\Controller
{
	public function run()
	{
		$page = new page_renderpage();
		//$page = get_object_vars($page);
		//print_r ($page);
		$this->renderPage($page);
	
	}
}
