<?php
/**
 * Created by PhpStorm.
 * User: Arkadiusz
 * Date: 09.02.2016
 * Time: 21:27
 */
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
class Client
{
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $surname;

    /**
     * @Assert\Email()
     * @ORM\Column(type="string", length=100)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $phoneNumber;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $termsCheckbox;

    /**
     * @ORM\Column(type="boolean")
     */
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

}