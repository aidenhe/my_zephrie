namespace Mvc;
 
class Applications
{
	public static function router(array config)
	{
		var path;
		var serpath;
		var controller;

		let serpath = _SERVER["REQUEST_URI"];

		if serpath == "/index.php" {
			require CTR_PATH.config["default_controller"].".php";
			return config["default_controller"];		
		}

		let controller = explode("?",str_replace("/index.php/", "", serpath))["0"];
		let path = CTR_PATH.controller.".php";
		if file_exists(path) {
			require path;
			return str_replace("/", "_", controller);
		}else{
			require CTR_PATH.config["404_controller"].".php";
			return config["404_controller"];	
		}
	}

}
