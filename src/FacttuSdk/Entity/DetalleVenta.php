<?php

namespace FacttuSdk\Entity;


use FacttuSdk\Common\TipoAfectacionIgv;


/**
 * Class DetalleVenta
 *
 * @package FacttuSdk\DetalleVenta
 *
 * @property string $tipo_documento
 * @property string $numero_documento
 * @property string $razon_social
 * @property string $correo_electronico
 * @property string $telefono
 * 
 */
class DetalleVenta
{

	/**
     * @var string
     */
    protected $unidad="";

	/**
     * @return string
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * @param string $unidad
     * @return $this
     */
    public function setUnidad($unidad)
    {   
        $this->unidad = $unidad;
        return $this;
    }


    /**
     * @var float
     */
    protected $cantidad=0;

    /**
     * @return float
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param float $cantidad
     * @return $this
     */
    public function setCantidad($cantidad)
    {   
        $this->cantidad = $cantidad;
        return $this;
    }



    /**
     * @var string
     */
    protected $codigo="";

    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param string $codigo
     * @return $this
     */
    public function setCodigo($codigo)
    {   
        $this->codigo = $codigo;
        return $this;
    }


    /**
     * @var string
     */
    protected $descripcion="";

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return $this
     */
    public function setDescripcion($descripcion)
    {   
        $this->descripcion = $descripcion;
        return $this;
    }



    /**
     * @var float
     */
    protected $valor_unitario=0;

    /**
     * @return float
     */
    public function getValorUnitario()
    {
        return $this->valor_unitario;
    }

    /**
     * @param float $valor_unitario
     * @return $this
     */
    public function setValorUnitario($valor_unitario)
    {   
        $this->valor_unitario = $valor_unitario;
        return $this;
    }



    /**
     * @var float
     */
    protected $monto_descuento=0;

    /**
     * @return float
     */
    public function getMontoDescuento()
    {
        return $this->monto_descuento;
    }

    /**
     * @param float $monto_descuento
     * @return $this
     */
    public function setMontoDescuento($monto_descuento)
    {   
        $this->monto_descuento = $monto_descuento;
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
     * @var integer
     */
    protected $tipo_afectacion_igv=TipoAfectacionIgv::GravadoOperacionOnerosa;

    /**
     * @return integer
     */
    public function getTipoAfectacionIGV()
    {
        return $this->tipo_afectacion_igv;
    }

    /**
     * @param integer $tipo_afectacion_igv
     * @return $this
     */
    public function setTipoAfectacionIGV($tipo_afectacion_igv)
    {   
        $this->tipo_afectacion_igv = $tipo_afectacion_igv;
        return $this;
    }



    /**
     * @var float
     */
    protected $precio_unitario=0;

    /**
     * @return float
     */
    public function getPrecioUnitario()
    {
        return $this->precio_unitario;
    }

    /**
     * @param float $precio_unitario
     * @return $this
     */
    public function setPrecioUnitario($precio_unitario)
    {   
        $this->precio_unitario = $precio_unitario;
        return $this;
    }



    /**
     * @var float
     */
    protected $valor_venta=0;

    /**
     * @return float
     */
    public function getValorVenta()
    {
        return $this->valor_venta;
    }

    /**
     * @param float $valor_venta
     * @return $this
     */
    public function setValorVenta($valor_venta)
    {   
        $this->valor_venta = $valor_venta;
        return $this;
    }


    /**
     * @var float
     */
    protected $monto_valor_gratuito=0;

    /**
     * @return float
     */
    public function getMontoValorGratuito()
    {
        return $this->monto_valor_gratuito;
    }

    /**
     * @param float $monto_valor_gratuito
     * @return $this
     */
    public function setMontoValorGratuito($monto_valor_gratuito)
    {   
        $this->monto_valor_gratuito = $monto_valor_gratuito;
        return $this;
    }


    /**
     * @var float
     */
    protected $monto_base_igv=0;

    /**
     * @return float
     */
    public function getMontoBaseIgv()
    {
        return $this->monto_base_igv;
    }

    /**
     * @param float $monto_base_igv
     * @return $this
     */
    public function setMontoBaseIgv($monto_base_igv)
    {   
        $this->monto_base_igv = $monto_base_igv;
        return $this;
    }

   

}