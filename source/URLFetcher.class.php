<?

/*
URLFetcher.class.php - @nonoesp - http://nono.ma/says
Licensed under the MIT license

Copyright (c) 2013 Nono Martínez Alonso

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

class URLFetcher {

public $log; //Stores log messages
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
 
    $this->log = 'Successfully read '.$_url;
    // set $html property to content
    $this->html = $html;
  }	else {
    $this->log = 'Couldnt read '.$_url;
    // set $html property to null
    $this->html = null;
  }
 
  }
}

?>
