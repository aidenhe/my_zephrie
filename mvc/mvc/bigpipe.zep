namespace Mvc;
 
class Bigpipe
{
	public tplpath;
	public tpl;
	
	public isSkeleton = false;
	
	public child;
	//public templatedata;

	public pageletData;

	public function __construct()
	{
		let this->tpl = APP_PATH . "/" . this->tpl;
			
		this->render();
		
	}
	public function prepareData()
	{
		
	}

	public function getJson()
	{
		return json_decode(file_get_contents(APP_PATH . "/" . this->tplpath . "page_config.json", true));
	}


	public function render()
	{
		let this->pageletData = this->prepareData();
		//if file_exists(this->tpl) {
			//let this->templatedata = eval("?>"."file_get_contents(this->tpl)");
		//}else{
		//	echo this->tpl . "REQUIRE ERROR";
		//}

		if this->isSkeleton {
			this->_renderPage();
		}else{
			
		}	
		
	}

	public function _renderPage()
	{
		var jsonconfig;	
		let jsonconfig = get_object_vars(this->getJson());
		var plid, pl, pagelet,plclass;
		for plid, pl in jsonconfig {
			let plclass = "new" . " " . plid;
			let pagelet = LIB_PATH . str_replace("_", "/", plid) . ".php";
			if file_exists(pagelet) {
				let this->child[plid] =eval(plclass);
				
			}else{
				echo pagelet . "REQUIRE ERROR";
			}	
			var childobject, plconfig;
			let plconfig = get_object_vars(pl);
			let childobject = this->child[plid];	
			let childobject->plconfig = plconfig;

		}
	}





}
