<?PHP

namespace etrak;

abstract class ApiResource {
  
  var $uri;
  var $payload = '';
  var $headers = [];

  function __construct() {
    $this->etrak = etrak::instance();
  }
  
  static function init() {
    
    $cn = get_called_class();
    $r = new $cn();
    return $r;
    
  }
  
  static function create($payload=[]) {
    
    $r = self::init();    
    $r->payload = $payload;
    $r->method = 'POST';
    return $r->sendRequest();
    
  }
  
  function get($id=false) {
    
    $r = self::init();
    $r->method = 'GET';
    if($id) $r->uri.="/$id";
    return $r->sendRequest();
    
  }
  
  function update($id=false, $payload) {
    
    $r = self::init();    
    $r->payload = $payload;
    $r->method = 'PUT';
    if($id) $r->uri.="/$id";
    return $r->sendRequest();
    
  }
  
  function delete($id=false) {
    
    $r = self::init();    
    $r->payload = $payload;
    $r->method = 'DELETE';
    if($id) $r->uri.="/$id";
    return $r->sendRequest();    
  }
  
  public function sendRequest() {
    
    $response = $this->etrak->HttpClient->sendRequest($this->method, $this->etrak->endpoint.$this->uri, $this->payload, $this->headers);
    return $response;
    
  }
  
  
  
}

?>