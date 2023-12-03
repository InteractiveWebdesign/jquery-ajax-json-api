<?php

$existingNames = array("John", "Jane", "Joe", "Jenny", "Jack", "Jill", "Ruud", "Ramon", "Rene", "Richard");

if(isset($_POST['names'])) {
    $name = $_POST['names'];

    if(!empty($name)) {
        foreach($existingNames as $existingName) {
            if(strpos($existingName, $name) !== false) {
                echo $existingName;
                echo "<br>";
            }
        }
    }
}

?>