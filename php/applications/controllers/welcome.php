<?php

class welcome extends Mvc\Controller
{
	public $tplpath = 'view/welcome.phtml';
	public $dataConfig;
	public function index()
	{
		echo "welcome";
	}
	
	public function run()
	{
		
		$run = new model_dw_mymodel();
		$data['haha'] = $run->create();
		$this->renderHtml($data);
	}
}
