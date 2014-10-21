<?php
namespace myzephir\core;

class loader{

public function loadClass($className)
{
$load=new \Mvc\Autoload();
$load->load(MODEL_PATH,'Dw_Mymodel');
}
}


