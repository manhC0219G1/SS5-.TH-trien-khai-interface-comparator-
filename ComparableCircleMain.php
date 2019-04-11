<?php
include "ComparableCircle.php";

$circleOne = new ComparableCircle(8, 'circleOne');
$circleTwo = new ComparableCircle(17, 'circleTwo');

var_dump($circleOne->compareTo($circleTwo));