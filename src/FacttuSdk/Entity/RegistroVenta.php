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
 * @property string $fecha_emision

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


    /**
     * @return string
     */
    public function getFechaEmision()
    {
        return $this->fecha_emision;
    }

    /**
     * @param string $fecha_emision
     * @return $this
     */
    public function setFechaEmision($fecha_emision)
    {
        if ($fecha_emision instanceof \DateTime) {

            $fecha_emision=$fecha_emision->format('Y-m-d\TH:i:s');
        }

        $this->fecha_emision = $fecha_emision;

        return $this;
    }


    /**
     * @var string
     */
    protected $tipo_moneda="PEN";


    /**
     * @return string
     */
    public function getTipoMoneda()
    {
        return $this->tipo_moneda;
    }

    /**
     * @param string $tipo_moneda
     * @return $this
     */
    public function setTipoMoneda($tipo_moneda)
    {
        $this->tipo_moneda = $tipo_moneda;
        return $this;
    }



    /**
     * @var float
     */
    protected $suma_otros_cargos=0;

    /**
     * @return float
     */
    public function getSumaOtrosCargos()
    {
        return $this->suma_otros_cargos;
    }

    /**
     * @param float $suma_otros_cargos
     * @return $this
     */
    public function setSumaOtrosCargos($suma_otros_cargos)
    {
        $this->suma_otros_cargos = $suma_otros_cargos;
        return $this;
    }


    /**
     * @var float
     */
    protected $monto_operaciones_gravadas=0;

    /**
     * @return float
     */
    public function getMontoOperacionesGravadas()
    {
        return $this->monto_operaciones_gravadas;
    }

    /**
     * @param float $monto_operaciones_gravadas
     * @return $this
     */
    public function setMontoOperacionesGravadas($monto_operaciones_gravadas)
    {
        $this->monto_operaciones_gravadas = $monto_operaciones_gravadas;
        return $this;
    }


    /**
     * @var float
     */
    protected $monto_operaciones_inafectas=0;

    /**
     * @return float
     */
    public function getMontoOperacionesInafectas()
    {
        return $this->monto_operaciones_inafectas;
    }

    /**
     * @param float $monto_operaciones_inafectas
     * @return $this
     */
    public function setMontoOperacionesInafectas($monto_operaciones_inafectas)
    {
        $this->monto_operaciones_inafectas = $monto_operaciones_inafectas;
        return $this;
    }


    /**
     * @var float
     */
    protected $monto_operaciones_exoneradas=0;

    /**
     * @return float
     */
    public function getMontoOperacionesExoneradas()
    {
        return $this->monto_operaciones_exoneradas;
    }

    /**
     * @param float $monto_operaciones_exoneradas
     * @return $this
     */
    public function setMontoOperacionesExoneradas($monto_operaciones_exoneradas)
    {
        $this->monto_operaciones_exoneradas = $monto_operaciones_exoneradas;
        return $this;
    }


    /**
     * @var float
     */
    protected $monto_igv=0;

    /**
     * @return float
     */
    public function getMontoIGV()
    {
        return $this->monto_igv;
    }

    /**
     * @param float $monto_igv
     * @return $this
     */
    public function setMontoIGV($monto_igv)
    {
        $this->monto_igv = $monto_igv;
        return $this;
    }


    /**
     * @var float
     */
    protected $monto_isc=0;

    /**
     * @return float
     */
    public function getMontoISC()
    {
        return $this->monto_isc;
    }

    /**
     * @param float $monto_isc
     * @return $this
     */
    public function setMontoISC($monto_isc)
    {
        $this->monto_isc = $monto_isc;
        return $this;
    }


    /**
     * @var float
     */
    protected $monto_otros_tributos=0;

    /**
     * @return float
     */
    public function getMontoOtrosTributos()
    {
        return $this->monto_otros_tributos;
    }

    /**
     * @param float $monto_otros_tributos
     * @return $this
     */
    public function setMontoOtrosTributos($monto_otros_tributos)
    {
        $this->monto_otros_tributos = $monto_otros_tributos;
        return $this;
    }


    /**
     * @var float
     */
    protected $monto_total_importe_venta=0;

    /**
     * @return float
     */
    public function getMontoTotalImporteVenta()
    {
        return $this->monto_total_importe_venta;
    }

    /**
     * @param float $monto_total_importe_venta
     * @return $this
     */
    public function setMontoTotalImporteVenta($monto_total_importe_venta)
    {
        $this->monto_total_importe_venta = $monto_total_importe_venta;
        return $this;
    }



    /**
     * @return Leyenda[]
     */
    public function getLeyendas()
    {
        return $this->leyendas;
    }

    /**
     * @param Leyenda[] $leyendas
     * @return $this
     */
    public function setLeyendas($leyendas)
    {
        $this->leyendas = $leyendas;
        return $this;
    }


    /**
     * @return Guia[]
     */
    public function getGuias()
    {
        return $this->guias;
    }

    /**
     * @param Guia[] $guias
     * @return $this
     */
    public function setGuias($guias)
    {
        $this->guias = $guias;
        return $this;
    }


    /**
     * @return Object[]
     */
    public function getDocumentosRelacionados()
    {
        return $this->documentos_relacionados;
    }

    /**
     * @param Object[] $documentos_relacionados
     * @return $this
     */
    public function setDocumentosRelacionados($documentos_relacionados)
    {
        $this->documentos_relacionados = $documentos_relacionados;
        return $this;
    }



    /**
     * @return float
     */
    public function getMontoOperacionesGratuitas()
    {
        return $this->monto_operaciones_gratuitas;
    }

    /**
     * @param float $monto_operaciones_gratuitas
     * @return $this
     */
    public function setMontoOperacionesGratuitas($monto_operaciones_gratuitas)
    {
        $this->monto_operaciones_gratuitas = $monto_operaciones_gratuitas;
        return $this;
    }


    /**
     * @return float
     */
    public function getSumaDescuentoGlobal()
    {
        return $this->suma_descuento_global;
    }

    /**
     * @param float $suma_descuento_global
     * @return $this
     */
    public function setSumaDescuentoGlobal($suma_descuento_global)
    {
        $this->suma_descuento_global = $suma_descuento_global;
        return $this;
    }


    /**
     * @return float
     */
    public function getMontoDescuentos()
    {
        return $this->monto_descuentos;
    }

    /**
     * @param float $monto_descuentos
     * @return $this
     */
    public function setMontoDescuentos($monto_descuentos)
    {
        $this->monto_descuentos = $monto_descuentos;
        return $this;
    }


    /**
     * @return Descuento[]
     */
    public function getDescuentos()
    {
        return $this->descuentos;
    }

    /**
     * @param Descuento[] $descuentos
     * @return $this
     */
    public function setDescuentos($descuentos)
    {
        $this->descuentos = $descuentos;
        return $this;
    }



    /**
     * @return DetalleVenta[]
     */
    public function getDetalles()
    {
        return $this->detalles;
    }

    /**
     * @param DetalleVenta[] $detalles
     * @return $this
     */
    public function setDetalles($detalles)
    {
        $this->detalles = $detalles;
        return $this;
    }



    /**
     * @return Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param Cliente $cliente
     * @return $this
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
        return $this;
    }


    /**
     * @return string
     */
    public function getMontoTotalEnLetras()
    {
        return $this->monto_total_en_letras;
    }

    /**
     * @param string $monto_total_en_letras
     * @return $this
     */
    public function setMontoTotalEnLetras($monto_total_en_letras)
    {
        $this->monto_total_en_letras = $monto_total_en_letras;
        return $this;
    }



    /**
     * @return string
     */
    public function getRUCCliente()
    {

        $ruc="";

        if(isset($this->cliente))
        {
            $ruc=$this->cliente->getRUC();
        }

        return $ruc;
    }

    /**
     * @param string $ruc_cliente
     * @return $this
     */
    public function setRUCCliente($ruc_cliente)
    {
        if(!isset($this->cliente))
        {
            $this->cliente = new Cliente();
        }

        $this->cliente->setRUC($ruc_cliente);

        return $this;
    }




    /**
     * @return string
     */
    public function getDNICliente()
    {

        $dni="";

        if(isset($this->cliente))
        {
            $dni=$this->cliente->getDNI();
        }

        return $dni;
    }

    /**
     * @param string $dni_cliente
     * @return $this
     */
    public function setDNICliente($dni_cliente)
    {
        if(!isset($this->cliente))
        {
            $this->cliente = new Cliente();
        }

        $this->cliente->setDNI($dni_cliente);

        return $this;
    }



    /**
     * @return string
     */
    public function getNombreCompletoPersona()
    {

        $nombre_completo_persona="";

        if(isset($this->cliente))
        {
            $nombre_completo_persona=$this->cliente->getNombreCompleto();
        }

        return $nombre_completo_persona;
    }

    /**
     * @param string $nombre_completo_persona
     * @return $this
     */
    public function setNombreCompleto($nombre_completo_persona)
    {
        if(!isset($this->cliente))
        {
            $this->cliente = new Cliente();
        }

        $this->cliente->setDNI($nombre_completo_persona);

        return $this;
    }



    /**
     * @return string
     */
    public function getEmailCliente()
    {

        $email_cliente="";

        if(isset($this->cliente))
        {
            $email_cliente=$this->cliente->getNombreCompleto();
        }

        return $email_cliente;
    }

    /**
     * @param string $email_cliente
     * @return $this
     */
    public function setEmailCliente($email_cliente)
    {
        if(!isset($this->cliente))
        {
            $this->cliente = new Cliente();
        }

        $this->cliente->setDNI($email_cliente);

        return $this;
    }



}