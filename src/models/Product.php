<?php
namespace vendor_name\project_name\entity;

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity **/
class Product
{

    /**
     * @Id()
     * @Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @OneToMany(targetEntity="Feature", mappedBy="product")
     **/
    private $features;

    public function __construct() {
        $this->features = new ArrayCollection();
    }
}
