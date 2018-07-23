<?php
class flickr {

  private function column_Sort($unsorted, $column) { 
      $sorted = $unsorted; 
      for ($i=0; $i < sizeof($sorted)-1; $i++) { 
        for ($j=0; $j<sizeof($sorted)-1-$i; $j++) 
          if ($sorted[$j][$column] > $sorted[$j+1][$column]) { 
            $tmp = $sorted[$j]; 
            $sorted[$j] = $sorted[$j+1]; 
            $sorted[$j+1] = $tmp; 
        } 
      } 
      return $sorted; 
    }
  
  public function __construct() {
    $this->user_id = '156294542@N07';
  	$this->api_key = 'a80f6d6e9da8f6923323c7f5a2d56a88';
    $this->api_url = 'https://www.flickr.com/services/rest/?method=flickr.photosets.';
    $this->cloud_url = 'https://res.cloudinary.com/rall/image/fetch/';
  	}
    
  public function getPhotos($photoset_id) {
    $rsp = file_get_contents($this->api_url.'getPhotos&format=php_serial&api_key='.$this->api_key.'&extras=url_m,description&photoset_id='.$photoset_id);
    $rsp_obj = unserialize($rsp);
    $ret = array();
  	foreach($rsp_obj['photoset']['photo'] as $res) {
  		$ret[] = array('id' => (string)$res['id']
      , 'title' => (string)$res['title']
      //, 'farm' => (string)$res['farm']
      //, 'server' => (string)$res['server']
      //, 'secret' => (string)$res['secret']
      , 'description' => (string)$res['description']['_content']
      //, 'url_sq' => (string)$res['url_sq']
      //, 'url_s' => (string)$res['url_s']
      //, 'url_t' => (string)$res['url_t']
      //, 'url_o' => (string)$res['url_o']
      , 'url_m' => (string)$res['url_m']
      , 'cloud_url' => $this->cloud_url
      );
  		}
  	return $ret;
  	}
    
  public function getAlbums($BlackList) {
  	$rsp = file_get_contents($this->api_url.'getList&format=php_serial&api_key='.$this->api_key.'&user_id='.$this->user_id);
    $rsp_obj = unserialize($rsp);
    //var_dump($rsp_obj);
    $ret = array(); 
    foreach($rsp_obj['photosets']['photoset'] as $res) {
      $title = (string)$res['title']['_content'];
      if (!in_array($title, $BlackList)) {
        $ret[] = array('id' => (string)$res['id']
        , 'primary' => (string)$res['primary']
        , 'secret' => (string)$res['secret']
        , 'server' => (string)$res['server']
        , 'farm' => (string)$res['farm']
        , 'photos' => (string)$res['photos']
        , 'title' => $title
        , 'description' => (string)$res['description']['_content']
          );
  		  }
      }      
  	  return $this->column_Sort($ret, 'title');
  	} 
}