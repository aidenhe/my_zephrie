namespace Mvc;
 
class Autoload
{
	public static function load(string model)
	{
		var modelpath;
		let modelpath = LIB_PATH.str_replace("_", "/", model).".php";
		if file_exists(modelpath) {
			require modelpath;
		}else{
			echo modelpath . "\r" . "ERROR";	
		}
	}
	public static function register(object loader){
		spl_autoload_register([loader, "load"]);
	}

}
