<?php

namespace FacttuSdk\Entity;


/**
 * Class Cliente
 *
 * @package FacttuSdk\Cliente
 *
 * @property string $tipo_documento
 * @property string $numero_documento
 * @property string $razon_social
 * @property string $correo_electronico
 * @property string $telefono
 * 
 */
class Cliente
{

	/**
     * @var string
     */
    protected $tipo_documento="";

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
     * @var string
     */
    protected $numero_documento="";

    /**
     * @return string
     */
    public function getNumeroDocumento()
    {
        return $this->numero_documento;
    }

    /**
     * @param string $numero_documento
     * @return $this
     */
    public function setNumeroDocumento($numero_documento)
    {   
        $this->numero_documento = $numero_documento;
        return $this;
    }


	/**
     * @var string
     */
    protected $razon_social="";

    /**
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razon_social;
    }

    /**
     * @param string $razon_social
     * @return $this
     */
    public function setRazonSocial($razon_social)
    {   
        $this->razon_social = $razon_social;
        return $this;
    }


    /**
     * @return string
     */
    public function getCorreoElectronico()
    {
        return $this->correo_electronico;
    }

    /**
     * @param string $correo_electronico
     * @return $this
     */
    public function setCorreoElectronico($correo_electronico)
    {   
        $this->correo_electronico = $correo_electronico;
        return $this;
    }


    /**
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param string $telefono
     * @return $this
     */
    public function setTelefono($telefono)
    {   
        $this->telefono = $telefono;
        return $this;
    }



    /**
     * @return string
     */
    public function getRUC()
    {
        return $this->numero_documento;
    }

    /**
     * @param string $ruc
     * @return $this
     */
    public function setRUC($ruc)
    {   
    	$this->tipo_documento = "6";
        $this->numero_documento = $ruc;
        return $this;
    }


    /**
     * @return string
     */
    public function getDNI()
    {
        return $this->numero_documento;
    }

    /**
     * @param string $dni
     * @return $this
     */
    public function setDNI($dni)
    {   
    	$this->tipo_documento = "1";
        $this->numero_documento = $dni;
        return $this;
    }


    /**
     * @return string
     */
    public function getNombreCompleto()
    {
        return $this->razon_social;
    }

    /**
     * @param string $nombre_completo
     * @return $this
     */
    public function setNombreCompleto($nombre_completo)
    {   
        $this->razon_social = $nombre_completo;
        return $this;
    }

   

}