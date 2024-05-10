<?php

require_once "Figure.php";
class Rectangle extends Figure
{
    private float $width;
    private float $height;

    public function __construct(float $width, float $height)
    {
        $this->setValues($width, $height);

    }

    /**
     * @param float $height
     */
    public function setValues(float $height, float $width): void
    {
        if ($height <= 0 || $width <= 0) {
            throw new Exception("Height and width must be greater than 0\n");
        }
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;

    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    public function area(): float
    {
        // TODO: Implement area() method.
        return $this->width * $this->height;
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return $this->area();

    }

    public function perimeter(): float
    {
        // TODO: Implement perimeter() method.
        return 2 * ($this->width + $this->height);
    }

    /**
     * @return float
     */
    public function getPerimeter(): float
    {
        return $this->perimeter();
    }
}