<?php

namespace etrak;

class HttpClient
{
    public $headers = array();
    public $timeout = 10;
    public $endpoint;

    public function __construct($endpoint)
    {
        $this->endpoint = rtrim($endpoint, '/');
        $this->headers['Content-Type'] = 'application/json';
    }

    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    public function sendRequest($method, $url, $payload='', $headers=array())
    {
        $headers = array_merge($headers, $this->headers);

        $method = strtoupper($method);
        if (!in_array($method, [ 'GET','POST','PUT','PATCH','DELETE' ])) {
            throw new \Exception('Unknown method "'.$method.'"');
        }

        // Create the request and set some basic parameters
        $request = \Httpful\Request::$method($url);
        $request->timeoutIn($this->request_timeout);
        $request->expectsJson(); // Always JSON from Crisp API
        if (count($headers) > 0) {
            $request->addHeaders($headers);
        }

        if ($method != 'GET') {
            if (is_array($payload)) {
                $payload = json_encode($payload);
            }
            if (strlen($payload) > 0) {
                $request->body($payload);
            }
        }

        $response = $request->send();

        return $response;
    }
}
