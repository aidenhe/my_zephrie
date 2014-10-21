namespace Mvc;
 
class Controller
{
	public tplpath = "";
	public dataConfig = [];
	public data;

	public function __construct()
	{
		
	}
	public function run()
	{
		
	}
	public function renderPage(object page)
	{
		if page->isSkeleton {		
			require page->tpl;
		}

		if empty(page->child){
			return false;
		}
		var child;
		let child = page->child;
		this->renderpl(child);
	}

	public function renderpl(array child)
	{
		var pl, pltemplate, key, value,html,fun,jsonvalue;
		
		for pl, pltemplate in child{
			ob_start();
			require pltemplate->tpl;
			let html = ob_get_contents();
			ob_end_clean();
			let jsonvalue = [];
			let fun = pltemplate->plconfig["fun"];
			
			let jsonvalue["domid"] = pltemplate->plconfig["domid"];
			let jsonvalue["html"] = html;

			echo "<script>" . fun . "(" . json_encode(jsonvalue) . ")" . "</script>\r\n";
			this->makeflush();
			
		}
		
	}	

	public function renderHtml(array data){
		if file_exists(this->tplpath) {
			let this->data = data;
			require this->tplpath;
			
		}
	}

	public function makeflush()
	{
		if ob_get_level() {
            		ob_flush();
       		}
      		flush();
	}

}
