<?php

namespace FacttuSdk\Auth;

use FacttuSdk\AbstractClient;
use FacttuSdk\Adapter\AdapterInterface;

class OAuthClient extends AbstractClient
{
    const BASE_URL = 'http://oauth.facttu.com';

    /**
     * OAuthClient constructor.
     *
     *
     * @inheritdoc
     */
    public function __construct(Credentials $credentials = null, $apiUrl = null, AdapterInterface $adapter = null, $config = array())
    {
        if(empty($apiUrl)) {
            $apiUrl = self::BASE_URL;
        }

        parent::__construct($credentials, $adapter, $apiUrl, $config);
    }

    public function clientCredentials()
    {
        $url = sprintf("%s/oauth", $this->apiUrl);
        $params = ['grant_type' => 'client_credentials'];
        $headers = ['Authorization' => 'Basic ' . base64_encode($this->credentials['client_id'] . ':' . $this->credentials['client_secret'])];
        $response = $this->adapter->postBodyParams($url, $params, $headers);
        return new AccessToken($response);
    }
}