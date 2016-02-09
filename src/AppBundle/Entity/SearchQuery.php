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
     * @Assert\GreaterThanOrEqual("+2 hours", message="Pick up date should happen later than {{ compared_value }}")
     */
    protected $pickupDateTime;

    /**
     * @Assert\NotBlank()
     * @Assert\Date()
     * @Assert\GreaterThanOrEqual("+3 hours", message="Drop off date should happen later than {{ compared_value }}"))
     */
    protected $returnDateTime;

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

    public function getPickupDateTime()
    {
        return $this->pickupDateTime;
    }

    public function setPickupDateTime(\DateTime $pickupDateTime = null)
    {
        $this->pickupDateTime = $pickupDateTime;
    }

    public function getReturnDateTime()
    {
        return $this->returnDateTime;
    }

    public function setReturnDateTime(\DateTime $returnDateTime = null)
    {
        $this->returnDateTime = $returnDateTime;
    }

    /**
     * @Assert\IsTrue(message = "Pick up date and time cannot happen after drop off date and time")
     */
    public function isPickupBeforeReturn()
    {
        return $this->getPickupDateTime() <= $this->getReturnDateTime();
    }

}