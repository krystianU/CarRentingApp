<?php
/**
 * Created by PhpStorm.
 * User: Arkadiusz
 * Date: 09.02.2016
 * Time: 23:12
 */
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="reservation)
 */
class Reservation
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
     * TO DO<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
     */
    protected $pickupCity;

    /**
     * TO DO<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
     */
    protected $returnCity;

    /**
     * @ORM\Column(type="date")
     */
    protected $pickupDateTime;

    /**
     * @ORM\Column(type="date")
     */
    protected $returnDateTime;

    /**
     * TO DO<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
     */
    protected $carId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $clientName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $clientSurname;

    /**
     * @Assert\Email()
     * @ORM\Column(type="string", length=100)
     */
    protected $clientEmail;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $clientTelephone;

    /**
     * @ORM\Column(type="date")
     */
    protected $createDate;

    /**
     * @ORM\Column(type="date")
     */
    protected $updateDate;

    /**
     * @Assert\Choice(choices = {"PENDING", "CONFIRMED", "CANCELED"})
     * @ORM\Column(type="string")
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=4)
     */
    protected $pin;

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
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param mixed $pin
     */
    public function setPin($pin)
    {
        $this->pin = $pin;
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
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * @param mixed $clientName
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
    }

    /**
     * @return mixed
     */
    public function getClientSurname()
    {
        return $this->clientSurname;
    }

    /**
     * @param mixed $clientSurname
     */
    public function setClientSurname($clientSurname)
    {
        $this->clientSurname = $clientSurname;
    }

    /**
     * @return mixed
     */
    public function getClientEmail()
    {
        return $this->clientEmail;
    }

    /**
     * @param mixed $clientEmail
     */
    public function setClientEmail($clientEmail)
    {
        $this->clientEmail = $clientEmail;
    }

    /**
     * @return mixed
     */
    public function getClientTelephone()
    {
        return $this->clientTelephone;
    }

    /**
     * @param mixed $clientTelephone
     */
    public function setClientTelephone($clientTelephone)
    {
        $this->clientTelephone = $clientTelephone;
    }

    /**
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param mixed $createDate
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    /**
     * @return mixed
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * @param mixed $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }




}