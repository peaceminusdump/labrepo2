<?php

    function calculateArea($length, $width){
        $area = $length * $width;
        echo "The area of a rectangle with length $length and width $width is: $area<br>";
    }

    calculateArea(5, 10);
    calculateArea(7, 3);

?>