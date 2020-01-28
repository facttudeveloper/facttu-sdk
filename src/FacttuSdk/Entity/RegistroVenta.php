<?php

namespace FacttuSdk\Entity;

use FacttuSdk\Common\DocumentoSunat;

/**
 * Class RegistroVenta
 *
 * @package FacttuSdk\Entity
 *
 * @property string $tipo_documento
 * @property string $serie
 * @property string $numero
 * 
 */
class RegistroVenta extends DocumentoSunat
{
	/**
     * @return string
     */
    public function getTipoDocumento()
    {
        return $this->tipo_documento;
    }

    /**
     * @param string $tipo_documento
     * @return $this
     */
    public function setTipoDocumento($tipo_documento)
    {
        $this->tipo_documento = $tipo_documento;

        return $this;
    }



    /**
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * @param string $serie
     * @return $this
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }


    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     * @return $this
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

}