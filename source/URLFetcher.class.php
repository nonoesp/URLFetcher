<?

/*	URLFetcher.class (2012-10-12/2013-05-26)
	
	Nono Martínez Alonso (@nonoesp)
	http://nono.ma/says
*/

class URLFetcher {

public $log;
public $html;

public function URLFetcher() {
  $this->setUser();
  $this->url = $_SERVER['REQUEST_URI'];
}

public function fetchURL($_url) {
  if($_url){
	
  $error=0;
  $html="";
  $f = @fopen($_url, 'rb');
		
  if($f) {
    while(!feof($f))
    $html.= fgets($f, 1024);
    fclose($f);
    
    $this->log = 'Successfully read '.$_url; $this->html = $html;
  }	else {
    $this->log = 'Couldnt read '.$_url; $this->html = null;
  }
 
  }
}

?>
