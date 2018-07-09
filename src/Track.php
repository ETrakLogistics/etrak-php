<?PHP

namespace etrak;

class Track extends ApiResource {
  
  var $uri = '/Track';
  
  static function getEvents($barcode, $postcode) {
    
    $barcode = urlencode($barcode);
    $postcode = urlencode($postcode);
    
    $r = self::init();
    $r->method = 'GET';
    $r->uri.="/$barcode/$postcode";
    return $r->sendRequest();
    
  }
    
}

?>