<?php
/**
 * Created by PhpStorm.
 * User: Arkadiusz
 * Date: 09.02.2016
 * Time: 23:12
 */
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Reservation
{
    protected $carId;
    protected $pickupCity;
    protected $returnCity;
    protected $pickupDateTime;
    protected $returnDateTime;
    protected $name;
    protected $surname;
    protected $email;
    protected $telephone;

    /**
     * Reservation constructor.
     * @param $carId
     * @param $pickupCity
     * @param $returnCity
     * @param $pickupDateTime
     * @param $returnDateTime
     * @param $name
     * @param $surname
     * @param $email
     * @param $telephone
     */
    public function __construct($carId, $pickupCity, $returnCity, $pickupDateTime, $returnDateTime, $name, $surname, $email, $telephone)
    {
        $this->carId = $carId;
        $this->pickupCity = $pickupCity;
        $this->returnCity = $returnCity;
        $this->pickupDateTime = $pickupDateTime;
        $this->returnDateTime = $returnDateTime;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getCarId()
    {
        return $this->carId;
    }

    /**
     * @param mixed $carId
     */
    public function setCarId($carId)
    {
        $this->carId = $carId;
    }

    /**
     * @return mixed
     */
    public function getPickupCity()
    {
        return $this->pickupCity;
    }

    /**
     * @param mixed $pickupCity
     */
    public function setPickupCity($pickupCity)
    {
        $this->pickupCity = $pickupCity;
    }

    /**
     * @return mixed
     */
    public function getReturnCity()
    {
        return $this->returnCity;
    }

    /**
     * @param mixed $returnCity
     */
    public function setReturnCity($returnCity)
    {
        $this->returnCity = $returnCity;
    }

    /**
     * @return mixed
     */
    public function getPickupDateTime()
    {
        return $this->pickupDateTime;
    }

    /**
     * @param mixed $pickupDateTime
     */
    public function setPickupDateTime($pickupDateTime)
    {
        $this->pickupDateTime = $pickupDateTime;
    }

    /**
     * @return mixed
     */
    public function getReturnDateTime()
    {
        return $this->returnDateTime;
    }

    /**
     * @param mixed $returnDateTime
     */
    public function setReturnDateTime($returnDateTime)
    {
        $this->returnDateTime = $returnDateTime;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
}