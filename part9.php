<?php
    ini_set('display_errors', 1); //Show errors for debugging

    $firstName = "Jane";
    $lastName = "Doe";
    $age = 35;
    $married = true;
    $childrenNames = array("Alice", "Bob");

    $fullName = $firstName . " " . $lastName;
    $dogYears = $age/7;
    $isAdult = $dogYears > 4;
    $isSettled = $isAdult and $married;

    function getFullName($firstName, $lastName) {
        return $firstName . " " . $lastName;
    }

    $fullName = getFullName($firstName, $lastName);
    $fullName = getFullName("Alice", "Doe");

    function getIsSettled($age, $married) {
        $dogYears = $age/7;
        $isAdult = $dogYears > 4;
        $isSettled = $isAdult and $married;
        return $isSettled;
    }

    $isSettled = getIsSettled($age, $married);
    $isSettled = getIsSettled(5, false);

    if ($isSettled) {
        echo $fullName . " is settled.";
    } else {
        echo $fullName . " is not settled.";
    }

    foreach($childrenNames as $childName) {
        echo "<li>" . $childName . "</li>";
    }
?>