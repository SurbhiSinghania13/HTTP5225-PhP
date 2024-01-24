<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP Week Showcase</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $days = ceil(rand(1,7));

        switch($days)
        {
            case 1:
                echo '<h2> Its Sunday !!Yayyy';
                break;
            case 2:
                echo '<h2> Its Monday !!Working Day';
                break;
            case 3:
                echo '<h2> Its Tuesday';
                break;
            case 4:
                echo '<h2> Its Wednesday';
                break;
            case 5:
                echo '<h2> Its Thursday';
                break;
            case 6:
                echo '<h2> Its Friday!! On the point for weekend';
                break; 
            default:
                echo '<h2> Its Saturday!! Weekend Started';
        }


        ?>