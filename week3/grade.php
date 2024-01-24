<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP Grade Calculator</h1> 

        <h2>Use PHP echo and variables to outhput the following link information, use if statements to make sure everything outputs correctly:</h2>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $grade = ceil(rand(1,100));

        if($grade<60)
        {
            echo '<h3>Your percentage is ' . $grade . '</h3>';
            echo '<h3>Your Grade is F</h3>';
        }
        // 61-70
        elseif($grade<=70 && $grade>=61)
        {
            echo '<h3>Your percentage is ' . $grade . '</h3>';
            echo '<h3>Your Grade is E</h3>';
        }
        // 71-75
        elseif($grade<=75 && $grade>=71)
        {
            echo '<h3>Your percentage is ' . $grade . '</h3>';
            echo '<h3>Your Grade is D</h3>';
        }
        // 76-80
        elseif($grade<=80 && $grade>=76)
        {
            echo '<h3>Your percentage is ' . $grade . '</h3>';
            echo '<h3>Your Grade is C</h3>';
        }
        // 81-85
        elseif($grade<=85 && $grade>=81)
        {
            echo '<h3>Your percentage is ' . $grade . '</h3>';
            echo '<h3>Your Grade is B</h3>';
        }
        // 88-90
        elseif($grade<=90 && $grade>=88)
        {
            echo '<h3>Your percentage is ' . $grade . '</h3>';
            echo '<h3>Your Grade is A</h3>';
        }
        else{
            echo '<h3>Your percentage is ' . $grade . '</h3>';
            echo '<h3>Your Grade is A+</h3>';
        }



        ?>