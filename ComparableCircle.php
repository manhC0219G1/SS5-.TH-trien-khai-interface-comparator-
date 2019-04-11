<?php
include "Circle/Circle.php";
include "Interface Comparale/Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($radius, $name)
    {
        parent::__construct($radius, $name);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();
        if ($this->getRadius() > $circleOtherRadius) {
            return 1;
        }  else if($this->getRadius() < $circleOtherRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}