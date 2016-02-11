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

    protected $id;
    protected $slug;
    protected $pickupCity;
    protected $returnCity;
    protected $pickupDateTime;
    protected $returnDateTime;
    protected $carId;
    protected $clientName;
    protected $clientSurname;
    protected $clientEmail;
    protected $clientTelephone;
    protected $createDate;
    protected $updateDate;
    protected $status;  /* pending, confirmed, canceled */

    /**
     * Reservation constructor.
     * @param $id
     * @param $slug
     * @param $pickupCity
     * @param $returnCity
     * @param $pickupDateTime
     * @param $returnDateTime
     * @param $carId
     * @param $clientName
     * @param $clientSurname
     * @param $clientEmail
     * @param $clientTelephone
     * @param $createDate
     * @param $updateDate
     * @param $status
     */
    public function __construct($id, $slug, $pickupCity, $returnCity, $pickupDateTime, $returnDateTime, $carId, $clientName, $clientSurname, $clientEmail, $clientTelephone, $createDate, $updateDate, $status)
    {
        $this->id = $id;
        $this->slug = $slug;
        $this->pickupCity = $pickupCity;
        $this->returnCity = $returnCity;
        $this->pickupDateTime = $pickupDateTime;
        $this->returnDateTime = $returnDateTime;
        $this->carId = $carId;
        $this->clientName = $clientName;
        $this->clientSurname = $clientSurname;
        $this->clientEmail = $clientEmail;
        $this->clientTelephone = $clientTelephone;
        $this->createDate = $createDate;
        $this->updateDate = $updateDate;
        $this->status = $status;
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