<?php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Car
{
    protected $id;
    protected $slug;
    protected $model;
    protected $classId;
    protected $numberOfSeats;
    protected $numberOfDoors;
    protected $transmissionId;
    protected $pricePerHour;

    /**
     * Car constructor.
     * @param $id
     * @param $slug
     * @param $model
     * @param $classId
     * @param $numberOfSeats
     * @param $numberOfDoors
     * @param $transmissionId
     * @param $pricePerHour
     */
    public function __construct($id, $slug, $model, $classId, $numberOfSeats, $numberOfDoors, $transmissionId, $pricePerHour)
    {
        $this->id = $id;
        $this->slug = $slug;
        $this->model = $model;
        $this->classId = $classId;
        $this->numberOfSeats = $numberOfSeats;
        $this->numberOfDoors = $numberOfDoors;
        $this->transmissionId = $transmissionId;
        $this->pricePerHour = $pricePerHour;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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