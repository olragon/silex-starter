<?php
namespace vendor_name\project_name\entity;

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity **/
class Feature
{
    /**
     * @Id()
     * @Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Product", inversedBy="features")
     * @JoinColumn(name="product_id", referencedColumnName="id")
     **/
    private $product;
    // ...
}
