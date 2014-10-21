<?php
namespace Mvc;
  
	header("Content-type: text/html; charset=utf-8");
	header("Connection: Keep-Alive");

	define('APP_PATH', dirname(__FILE__));
	define('CTR_PATH', APP_PATH . '/applications/controllers/');
	define('LIB_PATH', APP_PATH . '/applications/lib/');

	$myLibLoader = new Autoload();
	$myLibLoader->register($myLibLoader);

	$runtime = new \model_Runtime();
	$runtime->start_microtime();

	$controller = Applications::router(include (APP_PATH . '/config/router.php'));
	$app = new $controller();
	$app->run();

	$runtime->end_microtime();
	echo "<center>Spend {$runtime->spend_millisecond()} millisecond</center>";
