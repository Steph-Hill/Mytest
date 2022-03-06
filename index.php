<?php

          Include("config.php");


  /* echo "Hello Mon Stéphen ","</br>","</br>";*/

 

    $result = $mysqli->query("SELECT * FROM mycreation ORDER BY ID ");


    var_dump($rowmycreation);
    /*foreach ($result as $mycreation) {


        //echo $rowmycreation["nom"],"</br>";
    }*/
   



?>
