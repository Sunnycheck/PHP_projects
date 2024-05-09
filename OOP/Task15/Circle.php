<?php


class Circle extends Figure
{
    private float $radius;
    private float $pi;

    public function __construct(float $radius)
    {
        $this->setRadius($radius);
        $this->pi = pi();

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

    public function area(float $radius, float $pi): float
    {

        // TODO: Implement area() method.
        return $this->pi * pow($radius, 2);
    }

    public function getArea(): float
    {
        return $this->area($this->radius, $this->pi);
    }

    public function perimeter(float $radius, float $pi): float
    {
        // TODO: Implement perimeter() method.
        return 2 * $this->pi * $radius;

    }

    public function getPerimeter(): float
    {
        return $this->perimeter($this->radius,$this->pi);
    }
}
