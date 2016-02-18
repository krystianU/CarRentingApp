<?php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="car")
 */
class Car
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    protected $slug;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $model;


    protected $classId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $numberOfSeats;

    /**
     * @ORM\Column(type="integer")
     */
    protected $numberOfDoors;

    /**
     * TO BE OR NOT TO BE
     */
    protected $transmissionId;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $pricePerHour;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * @param mixed $classId
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;
    }

    /**
     * @return mixed
     */
    public function getNumberOfSeats()
    {
        return $this->numberOfSeats;
    }

    /**
     * @param mixed $numberOfSeats
     */
    public function setNumberOfSeats($numberOfSeats)
    {
        $this->numberOfSeats = $numberOfSeats;
    }

    /**
     * @return mixed
     */
    public function getNumberOfDoors()
    {
        return $this->numberOfDoors;
    }

    /**
     * @param mixed $numberOfDoors
     */
    public function setNumberOfDoors($numberOfDoors)
    {
        $this->numberOfDoors = $numberOfDoors;
    }

    /**
     * @return mixed
     */
    public function getTransmissionId()
    {
        return $this->transmissionId;
    }

    /**
     * @param mixed $transmissionId
     */
    public function setTransmissionId($transmissionId)
    {
        $this->transmissionId = $transmissionId;
    }

    /**
     * @return mixed
     */
    public function getPricePerHour()
    {
        return $this->pricePerHour;
    }

    /**
     * @param mixed $pricePerHour
     */
    public function setPricePerHour($pricePerHour)
    {
        $this->pricePerHour = $pricePerHour;
    }

}