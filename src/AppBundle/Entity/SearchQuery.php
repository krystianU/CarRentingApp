<?php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class SearchQuery
{
    /**
     * @Assert\NotBlank()
     */
    protected $pickupCity;

    /**
     * @Assert\NotBlank()
     */
    protected $returnCity;

    /**
     * @Assert\NotBlank()
     * @Assert\Date()
     * @Assert\GreaterThanOrEqual("today")
     */
    protected $pickupDate;

    /**
     * @Assert\NotBlank()
     * @Assert\Date()
     * @Assert\GreaterThanOrEqual("today")
     */
    protected $returnDate;

    /**
     * @Assert\NotBlank()
     * @Assert\Time()
     */
    protected $pickupTime;

    /**
     * @Assert\NotBlank()
     * @Assert\Time()
     */
    protected $returnTime;

    public function getPickupCity()
    {
        return $this->pickupCity;
    }

    public function setPickupCity($pickupCity)
    {
        $this->pickupCity = $pickupCity;
    }

    public function getReturnCity()
    {
        return $this->returnCity;
    }

    public function setReturnCity($returnCity)
    {
        $this->returnCity = $returnCity;
    }

    public function getPickupDate()
    {
        return $this->pickupDate;
    }


    public function setPickupDate(\DateTime $pickupDate = null)
    {
        $this->pickupDate = $pickupDate;
    }


    public function getReturnDate()
    {
        return $this->returnDate;
    }

    public function setReturnDate(\DateTime $returnDate = null)
    {
        $this->returnDate = $returnDate;
    }

    public function getPickupTime()
    {
        return $this->pickupTime;
    }

    public function setPickupTime(\DateTime $pickupTime = null)
    {
        $this->pickupTime = $pickupTime;
    }


    public function getReturnTime()
    {
        return $this->returnTime;
    }

    public function setReturnTime(\DateTime $returnTime = null)
    {
        $this->returnTime = $returnTime;
    }

}