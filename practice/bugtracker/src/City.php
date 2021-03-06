<?php
// src/City.php

/**
 * @Entity @Table(name="cities")
 **/
class City
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string") **/
    protected $name;
    
    /** @Column(type="integer") **/
    protected $pc;
    
    /**
     * @ManyToOne(targetEntity="Province", inversedBy="cities")
     * @JoinColumn(name="province_id", referencedColumnName="id")
     **/
    private $province;
        
    public function getId()
    {
        return $this->id;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setPc($pc)
    {
        $this->pc = $pc;
    }
    
    public function getPc()
    {
        return $this->pc;
    }
    
    public function setProvince(Province $province){
        $this->province = $province;
    }
}
?>

