<?php
namespace SOLID\OCP;

class Trip
{
    /**
     * @var IVehicle
     */
    private $vehicle;

    /**
     * @var string
     */
    private $tripNumber;

    /**
     * @var float
     */
    private $tripPrice;

    /**
     * @var int time duration in minutes
     */
    private $duration;

    /**
     * Trip constructor.
     * @param IVehicle $vehicle
     * @param string $tripNumber
     * @param float $tripPrice
     * @param int $duration
     */
    public function __construct(IVehicle $vehicle, string $tripNumber, float $tripPrice, int $duration)
    {
        $this->setVehicle($vehicle);
        $this->setTripNumber($tripNumber);
        $this->setTripPrice($tripPrice);
        $this->setDuration($duration);
    }

    /**
     * @return IVehicle
     */
    public function getBus(): IVehicle
    {
        return $this->vehicle;
    }

    /**
     * @param IVehicle $vehicle
     */
    public function setVehicle(IVehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
    }

    /**
     * @return string
     */
    public function getTripNumber(): string
    {
        return $this->tripNumber;
    }

    /**
     * @param string $tripNumber
     */
    public function setTripNumber(string $tripNumber): void
    {
        $this->tripNumber = $tripNumber;
    }

    /**
     * @return float
     */
    public function getTripPrice(): float
    {
        return $this->tripPrice;
    }

    /**
     * @param float $tripPrice
     */
    public function setTripPrice(float $tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function move() : string
    {
        return $this->vehicle->move();
    }
}
