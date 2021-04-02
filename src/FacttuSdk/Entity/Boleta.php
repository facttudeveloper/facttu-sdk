<?php

namespace FacttuSdk\Entity;

use FacttuSdk\Entity\Invoice;

use FacttuSdk\Common\TipoDocumentoElectronicoSunat;

/**
 * Class Factura
 *
 * @package FacttuSdk\Factura
 * 
 */
class Boleta extends Invoice
{

    public function __construct()
    {
        parent::setTipoDocumento("03");

        parent::setTipoDocumentoSunat(TipoDocumentoElectronicoSunat::Boleta);
    }


}