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


    /**
     * @return \DateTime
     */
    public function getFechaEmision()
    {
        return $this->fecha_emision;
    }

    /**
     * @param \DateTime $fecha_emision
     * @return $this
     */
    public function setFechaEmision($fecha_emision)
    {
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


}