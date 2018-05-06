<?php
namespace SOLID\SRP;

class Driver
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $insuranceNumber;

    /**
     * @var string
     */
    private $address;

    /**
     * Driver constructor.
     * @param string $name
     * @param int $age
     * @param string $insurance
     * @param string $address
     */
    public function __construct(string $name, int $age, string $insurance, string $address)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setInsuranceNumber($insurance);
        $this->setAddress($address);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getInsuranceNumber(): string
    {
        return $this->insuranceNumber;
    }

    /**
     * @param string $insuranceNumber
     */
    public function setInsuranceNumber(string $insuranceNumber): void
    {
        $this->insuranceNumber = $insuranceNumber;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
}
