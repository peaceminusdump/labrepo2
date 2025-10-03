<?php

    $course = "Web Development";

    function showCourse() {
        echo $course;
        //The value of $course is not accessible here because it is defined in the global scope.
    }

    function showCourse_global() {
        global $course;
        echo $course;
        //The value of $course is accessible here because we declared it as global.
    }

    showCourse_global();
    echo "<br>";
    echo $course; // Outputs: Web Development

?>