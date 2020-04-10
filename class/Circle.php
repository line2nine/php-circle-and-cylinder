<?php


class Circle
{
    public $name;
    public $radius;
    public $color;

    public function __construct($name, $radius, $color)
    {
        $this->name = $name;
        $this->color = $color;
        $this->radius = $radius;
    }

    public function getName()
    {
        return $this->name;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function getRadius()
    {
        return $this->radius;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }


    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getPerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function __toString()
    {
        return "<h3>Tên: " . $this->getName() . "</h3>Bán kính: " . $this->getRadius() .
            "<br> Màu sắc: " . $this->getColor() . "<br>Diện tích: " . $this->getArea() . "<br>Chu vi: " . $this->getPerimeter() . "<br>";
    }

}