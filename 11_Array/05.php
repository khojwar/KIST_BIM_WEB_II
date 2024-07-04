<?php
$cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );

    
    foreach ($cars as $car) {
        echo "<p><b>Row number</b></p>";
        echo "<ul>";
        foreach ($car as $key => $value) {
            echo "<li>" . $key . ": " . $value . "</li>";
        }
        echo "</ul>";
        }
        



?>