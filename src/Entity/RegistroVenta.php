<?php

namespace FacttuSdk\Entity;

use FacttuSdk\Common\DocumentoSunat;

/**
 * Class DocumentoSunat
 *
 * @package FacttuSdk\Entity
 *
 * @property string $TipoDocumento
 * @property string $Serie
 * @property string $Numero
 * 
 */
class RegistroVenta extends DocumentoSunat
{
	/**
     * @return string
     */
    public function getTipoDocumento()
    {
        return $this->TipoDocumento;
    }

    /**
     * @param string $TipoDocumento
     * @return $this
     */
    public function setTipoDocumento($TipoDocumento)
    {
        $this->TipoDocumento = $TipoDocumento;

        return $this;
    }



    /**
     * @return string
     */
    public function getSerie()
    {
        return $this->Serie;
    }

    /**
     * @param string $Serie
     * @return $this
     */
    public function setSerie($Serie)
    {
        $this->Serie = $Serie;

        return $this;
    }


    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * @param string $Numero
     * @return $this
     */
    public function setNumero($Numero)
    {
        $this->Numero = $Numero;

        return $this;
    }

}