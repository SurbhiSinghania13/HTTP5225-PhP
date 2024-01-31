<!doctype html>
<html>
<head>
   <title>PHP and For Loops</title> 
</head>
<body>
    
    <h1>PHP and For Loops</h1> 
    
    <p>Use PHP echo, if statements, and loops to output all three links.</p>
        
        
    <?php

    // **************************************************
    // Do not edit this code

    // Define a multi dimensional array to store all of the links
    $links = array (
        0 => array (
          'name' => 'Codecademy',
          'url' =>'https://www.codecademy.com/',
          'image' => 'code.png',
          'description' => 'Learn to code interactively, for free.' ),
        1 => array ( 
          'name' => 'W3 School',
          'url' => 'https://www.w3schools.com/',
          'image' => 'w3schools.png',
          'description' => 'W3Schools is optimized for learning, testing, and training.' ),
        2 => array (
          'name' => 'Mozilla Developer Network',
          'url' => 'https://www.codecademy.com/',
          'image' => 'mozilla.png',
          'description' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.' )
        );
        
    // **************************************************

    // Loop through the array and display the link information
    for ($i = 0; $i < count ($links); $i ++)
    {
        
        echo '<h1>'.$links[$i]['name'].'</h1>';
        echo '<a href ="'.$links[$i]['url']. '">'.$links[$i]['name'].'</a></br>';
        echo '<img src="' .$links[$i]['image']. '" width="200px"/>';
        echo '<p>'.$links[$i]['description'].'</p>';

    }
    //Use the print_r function to view the contents of the array
    // echo '<pre>';
    // print_r ($links);
    // echo '</pre>';
    
    ?>
    
</body>
</html>