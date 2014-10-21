<?php

class pl_footer extends Mvc\Bigpipe 
{
	public $tpl = 'view/page/footer.phtml';
	public $tplpath = 'view/page/';
	public $isSkeleton = false;
	
	public function prepareData()
        {

               
               return "This is the pl_footer";
             
	
        }
}
