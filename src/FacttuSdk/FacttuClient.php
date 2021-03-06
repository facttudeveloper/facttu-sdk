<?php
namespace FacttuSdk;

use FacttuSdk\AbstractClient;
use FacttuSdk\Adapter\AdapterInterface;
use FacttuSdk\Auth\Credentials;
use FacttuSdk\Common\DocumentoSunat;
use FacttuSdk\Common\FacttuResponse;


class FacttuClient extends AbstractClient
{
    const BASE_SERVICES = 'api/v1/sunat';

    const BASE_URL = 'http://api.facttu.com';

    /**
     * 
     *
     * 
     *
     * @inheritdoc
     */
    public function __construct(Credentials $credentials = null)
    {
        if(empty($apiUrl)) {
            $apiUrl = self::BASE_URL;
        }

        parent::__construct($credentials);
    }

    /**
     * 
     *
     *
     *
     * @param DocumentoSunat $documento
     * @return FacttuResponse
     */
    public function enviarDocumento(DocumentoSunat $documento)
    {
        $content = $this->adapter
            ->post(
                sprintf("%s/%s/%s", $this->apiUrl, self::BASE_SERVICES,"documentos/enviar"),
                $documento->toJSON(128)
            );

        return new FacttuResponse($content);
    }

   
}

