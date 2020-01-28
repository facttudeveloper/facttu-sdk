<?php

namespace FacttuSdk\Entity;

use FacttuSdk\Entity\RegistroVenta;

/**
 * Class Invoice
 *
 * @package FacttuSdk\Entity
 *
 * @property string $tipo_operacion
 * 
 */
class Invoice extends RegistroVenta
{

    /**
     * @var string
     */
    protected $tipo_operacion="0101";



	/**
     * @return string
     */
    public function getTipoOperacion()
    {
        return $this->tipo_operacion;
    }

    /**
     * @param string $tipo_operacion
     * @return $this
     */
    public function setTipoOperacion($tipo_operacion)
    {
        $this->tipo_operacion = $tipo_operacion;

        return $this;
    }


}