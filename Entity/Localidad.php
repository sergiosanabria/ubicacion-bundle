<?php

namespace Matudelatower\UbicacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidad
 *
 * @ORM\Table(name="localidades")
 * @ORM\Entity(repositoryClass="Matudelatower\UbicacionBundle\Entity\LocalidadRepository")
 */
class Localidad {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=255, nullable=true)
     */
    private $codigoPostal;

    /** @ORM\ManyToOne(targetEntity="Departamento", inversedBy="localidad")
     *  @ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="latitud", type="string", length=255, nullable=true)
     */
    private $latitud;

    /**
     * @var string
     *
     * @ORM\Column(name="longitud", type="string", length=255, nullable=true)
     */
    private $longitud;

    /**
     * @var string
     *
     * @ORM\Column(name="poblacion", type="string", length=255, nullable=true)
     */
    private $poblacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nodo_osm", type="string", length=255, nullable=true)
     */
    private $nodoOsm;

    /**
     * @var string
     *
     * @ORM\Column(name="wikipedia", type="string", length=255, nullable=true)
     */
    private $wikipedia;




    public function __toString() {
        return $this->descripcion;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Localidad
     */
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Localidad
     */
    public function setCodigo($codigo) {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo() {
        return $this->codigo;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     * @return Localidad
     */
    public function setCodigoPostal($codigoPostal) {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal() {
        return $this->codigoPostal;
    }

    /**
     * Set departamento
     *
     * @param \Matudelatower\UbicacionBundle\Entity\Departamento $departamento
     * @return Localidad
     */
    public function setDepartamento(\Matudelatower\UbicacionBundle\Entity\Departamento $departamento = null) {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return \Matudelatower\UbicacionBundle\Entity\Departamento
     */
    public function getDepartamento() {
        return $this->departamento;
    }

    /**
     * @return string
     */
    public function getLatitud() {
        return $this->latitud;
    }

    /**
     * @param string $latitud
     */
    public function setLatitud( $latitud ) {
        $this->latitud = $latitud;
    }

    /**
     * @return string
     */
    public function getLongitud() {
        return $this->longitud;
    }

    /**
     * @param string $longitud
     */
    public function setLongitud( $longitud ) {
        $this->longitud = $longitud;
    }

    /**
     * @return string
     */
    public function getPoblacion() {
        return $this->poblacion;
    }

    /**
     * @param string $poblacion
     */
    public function setPoblacion( $poblacion ) {
        $this->poblacion = $poblacion;
    }

    /**
     * @return string
     */
    public function getNodoOsm() {
        return $this->nodoOsm;
    }

    /**
     * @param string $nodoOsm
     */
    public function setNodoOsm( $nodoOsm ) {
        $this->nodoOsm = $nodoOsm;
    }

    /**
     * @return string
     */
    public function getWikipedia() {
        return $this->wikipedia;
    }

    /**
     * @param string $wikipedia
     */
    public function setWikipedia( $wikipedia ) {
        $this->wikipedia = $wikipedia;
    }


}
