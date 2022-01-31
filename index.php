<?php 

   include ('_classes\autoloader.class.php');
   // autoload the file in the index 
   spl_autoload_register(array('freamework\autoloader','autoload'));


    $car = new car();
    echo $car->price(5, 1000);
   


    

    