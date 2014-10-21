<?php

class page_renderpage extends Mvc\Bigpipe 
{
	public $tpl = 'view/page/index.phtml';
	public $tplpath = 'view/page/';
	public $isSkeleton = true;
	public function prepareData()
	{
		
		$run = new model_dw_mymodel();
		$da = $run->create();
		return $da;
	
	}
}
