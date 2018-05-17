<?PHP

namespace etrak;

class Label extends ApiResource {
  
  var $uri = '/Label';
  
  function get($id, $format='base64') {
    
    $r = self::init();
    $r->method = 'GET';
    if($id) $r->uri.="/$id";
    if($format) $r->uri.="/$format";
    return $r->sendRequest();
    
  }
    
}

?>