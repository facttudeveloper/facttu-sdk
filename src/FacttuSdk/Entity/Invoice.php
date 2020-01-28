<?php

namespace FacttuSdk\Entity;

use FacttuSdk\Entity\RegistroVenta;

/**
 * Class Invoice
 *
 * @package FacttuSdk\Entity
 *
 * @property string $TipoOperacion
 * 
 */
class Invoice extends RegistroVenta
{

    /**
     * @var string
     */
    protected $TipoOperacion="0101";



	/**
     * @return string
     */
    public function getTipoOperacion()
    {
        return $this->TipoOperacion;
    }

    /**
     * @param string $TipoOperacion
     * @return $this
     */
    public function setTipoOperacion($TipoOperacion)
    {
        $this->TipoOperacion = $TipoOperacion;

        return $this;
    }


}