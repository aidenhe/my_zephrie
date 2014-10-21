<?php

class pl_main extends Mvc\Bigpipe 
{
	public $tpl = 'view/page/main.phtml';
	public $tplpath = 'view/page/';
	public $isSkeleton = false;
	public function prepareData()
        {

                
                $run = new model_dw_mymodel();

                return $run->create();

        }	
}
