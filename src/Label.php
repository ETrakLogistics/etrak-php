<?PHP

namespace etrak;

class Label extends ApiResource {
  
  var $uri = '/Label';
  
  static function get($id, $format='base64', $version='1') {
    
    $r = self::init();
    $r->method = 'GET';
    if($id) $r->uri.="/$id";
    if($format) $r->uri.="/$format/$version";
    return $r->sendRequest();
    
  }
    
}

?>