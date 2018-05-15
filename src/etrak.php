<?PHP

namespace etrak;

class etrak extends Singleton {
  
  public $apiKey;
  
  public $endpoint_production = 'https://api.etrak.io/api';
  
  public $endpoint_sandbox = 'https://sandbox.api.etrak.io/api';
  
  public $apiVersion = '1.0';
  
  function __construct() {
    $this->initHttpClient();
    $this->endpoint = ($sandbox) ? $this->endpoint_sandbox : $this->endpoint_production;
  }
  
  function sandbox($sandbox=true) {
    $this->endpoint = ($sandbox) ? $this->endpoint_sandbox : $this->endpoint_production;
  }
  
  function setApiKey($key) {
    $this->apiKey = $key;
    $this->initHttpClient();
    return $this;
  }
  
  public function setEndpoint($endpoint) {
    $this->endpoint = $endpoint;
    return $this;
  }
  
  private function initHttpClient() {
    $this->HttpClient = new HttpClient($this->endpoint);
    $this->HttpClient->addHeader('version', $this->apiVersion);
    if($this->apiKey) $this->HttpClient->addHeader('Authorization', $this->apiKey);
  }
  
}

?>