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
class Factura extends Invoice
{

    public function __construct()
    {
        parent::setTipoDocumento("01");

        parent::setTipoDocumentoSunat(TipoDocumentoElectronicoSunat::Factura);
    }


}