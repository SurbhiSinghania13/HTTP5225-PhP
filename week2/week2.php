<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <h1>PHP and Creating Output</h1>
  
    <p>The PHP echo command can be used to create output.</p>

    <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
    
    <ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>
    
    <h2>More HTML to Convert</h2>

    <?php echo "<p>PHP says Hello World!</p>" ?>

    <p>Can you display a sentence with ' and "?</p>

   <img src="<?php echo "php-pic.jpg"; ?>">

    <?php
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';
    
    echo '<h1>'.$linkName.'</h1>';

    $job['title'] = 'Full Stack Developer';
    $job['company'] = 'TD Bank';
    $job['location'] = 'Etobicoke';
    $job['salary'] = 90000;
    
    

    echo "Job available for ".$job["title"] ." at location ".$job["location"]; 
?>
  </body>
</html>