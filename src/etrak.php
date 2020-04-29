<?php

namespace etrak;

class etrak extends Singleton
{
    const ENDPOINT_PRODUCTION = 'https://api.etrak.io/api';
    const ENDPOINT_SANDBOX = 'https://sandbox.api.etrak.io/api';

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $endpoint = self::ENDPOINT_PRODUCTION;

    /**
     * @var string
     */
    protected $apiVersion = '1.0';

    /**
     * @var HttpClient
     */
    protected $HttpClient;

    /**
     * etrak constructor.
     */
    public function __construct()
    {
        $this->initHttpClient();
    }

    public function sandbox()
    {
        $this->endpoint = self::ENDPOINT_SANDBOX;
        $this->initHttpClient();
        return $this;
    }

    public function setApiKey($key)
    {
        $this->apiKey = $key;
        $this->initHttpClient();
        return $this;
    }

    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    private function initHttpClient()
    {
        $this->HttpClient = new HttpClient($this->endpoint);
        $this->HttpClient->addHeader('version', $this->apiVersion);
        if ($this->apiKey) {
            $this->HttpClient->addHeader('Authorization', $this->apiKey);
        }
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient()
    {
        return $this->HttpClient;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @return string
     */
    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }
}
