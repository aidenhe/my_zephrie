<?php

class pl_header extends Mvc\Bigpipe 
{
	public $tpl = 'view/page/header.phtml';
	public $tplpath = 'view/page/';
	public $isSkeleton = false;
	public function prepareData()
	{
		
		$run = new model_dw_mymodel();

		return $run->create();
	
	}
}
