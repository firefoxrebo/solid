<?php
namespace SOLID\OCP;

abstract class Vehicle implements IVehicle
{

    /**
     * @var IMove
     */
    private $movable;

    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $maximumSpeed;

    /**
     * @var Driver
     */
    private $driver;

    /**
     * @var array
     */
    private $routes = [];

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getMaximumSpeed(): string
    {
        return $this->maximumSpeed . ' K/h';
    }

    /**
     * @param int $maximumSpeed
     */
    public function setMaximumSpeed(int $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
    }

    /**
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param Route $route
     */
    public function addRoute(Route $route) : void
    {
        $this->routes[] = $route;
    }

    /**
     * @return IMove
     */
    public function getMovable(): IMove
    {
        return $this->movable;
    }

    /**
     * @param IMove $movable
     */
    public function setMovable(IMove $movable): void
    {
        $this->movable = $movable;
    }

    /**
     * @return string
     */
    public function move() : string
    {
        return $this->getMovable()->move();
    }
}