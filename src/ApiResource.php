<?php

namespace etrak;

abstract class ApiResource
{
    public $uri;
    public $payload = '';
    public $headers = [];
    public $etrak;

    public function __construct()
    {
        $this->etrak = etrak::instance();
    }

    public static function init()
    {
        $cn = get_called_class();
        $r = new $cn();
        return $r;
    }

    public static function create($payload=[])
    {
        $r = self::init();
        $r->payload = $payload;
        $r->method = 'POST';
        return $r->sendRequest();
    }

    public static function get($id=false)
    {
        $r = self::init();
        $r->method = 'GET';
        if ($id) {
            $r->uri.="/$id";
        }
        return $r->sendRequest();
    }

    public static function paginate($page = 1, $show = 10)
    {
        $r = self::init();
        $r->method = 'GET';
        $r->uri.= http_build_query(compact('page', 'show'));
        return $r->sendRequest();
    }

    public static function update($id=false, $payload)
    {
        $r = self::init();
        $r->payload = $payload;
        $r->method = 'PUT';
        if ($id) {
            $r->uri.="/$id";
        }
        return $r->sendRequest();
    }

    public static function delete($id=false)
    {
        $r = self::init();
        $r->method = 'DELETE';
        if ($id) {
            $r->uri.="/$id";
        }
        return $r->sendRequest();
    }

    public function sendRequest()
    {
        $response = $this->etrak->getHttpClient()->sendRequest($this->method, $this->etrak->getEndpoint().$this->uri, $this->payload, $this->headers);
        return $response;
    }
}
