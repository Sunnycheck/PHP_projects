<?php


class Circle extends Figure
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @param float $radius
     */
    public function setRadius(float $radius): void
    {
        if ($radius <= 0) {
            throw new Exception("Radius must be greater than 0\n");
        }
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    public function area($radius, $p = null): float
    {

        // TODO: Implement area() method.
        return pi() * pow($radius, 2);
    }

    public function getArea(): float
    {
        return $this->area($this->radius, pi());
    }

    public function perimeter($radius, $p = null): float
    {
        // TODO: Implement perimeter() method.
        return 2 * pi() * $radius;

    }

    public function getPerimeter(): float
    {
        return $this->perimeter($this->radius, pi());
    }
}
