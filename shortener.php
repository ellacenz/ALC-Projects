<?php 

/**
 * 
 */
 class shortener {

 	protected $db;
 	public function _construct(){
 		//let's learn
 		$this->db = new mysqli('locathost', 'root', '', 'url_db');
 	}
 	protected function generateCode($num){

 	}
 	public function makeCode($url) {
 		$url = trim($url);

 		if(!filter_var($url, FILTER_VALIDATE_URL)){
 			return '';
 		}

 		//$url = $this->db->escape_string($url);
 		return $url;
 	}

 	// Check 
 	public function getUrl($code){

 	}
 	
 }
  ?>