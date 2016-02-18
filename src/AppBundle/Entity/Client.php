<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

class Client
{

    protected $name;
    protected $surname;
    protected $email;
    protected $phoneNumber;

    /**
     * @Assert\Length(
     *      min = 4,
     *      max = 4,
     * )
     */
    protected $pin;
    protected $termsCheckbox;
    protected $marketingCheckbox;

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
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getTermsCheckbox()
    {
        return $this->termsCheckbox;
    }

    /**
     * @param mixed $termsCheckbox
     */
    public function setTermsCheckbox($termsCheckbox)
    {
        $this->termsCheckbox = $termsCheckbox;
    }

    /**
     * @return mixed
     */
    public function getMarketingCheckbox()
    {
        return $this->marketingCheckbox;
    }

    /**
     * @param mixed $marketingCheckbox
     */
    public function setMarketingCheckbox($marketingCheckbox)
    {
        $this->marketingCheckbox = $marketingCheckbox;
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

}