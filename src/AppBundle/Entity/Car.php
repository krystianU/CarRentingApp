<?php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Car
{
    protected $model;
    protected $class;
    protected $numberOfSeats;
    protected $numberOfDoors;
    protected $typeOfGearbox;
    protected $pricePerHour;

    /**
     * Car constructor.
     * @param $model
     * @param $class
     * @param $numberOfSeats
     * @param $numberOfDoors
     * @param $typeOfGearbox
     * @param $pricePerHour
     */
    public function __construct($model, $class, $numberOfSeats, $numberOfDoors, $typeOfGearbox, $pricePerHour)
    {
        $this->model = $model;
        $this->class = $class;
        $this->numberOfSeats = $numberOfSeats;
        $this->numberOfDoors = $numberOfDoors;
        $this->typeOfGearbox = $typeOfGearbox;
        $this->pricePerHour = $pricePerHour;
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
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
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
    public function getTypeOfGearbox()
    {
        return $this->typeOfGearbox;
    }

    /**
     * @param mixed $typeOfGearbox
     */
    public function setTypeOfGearbox($typeOfGearbox)
    {
        $this->typeOfGearbox = $typeOfGearbox;
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