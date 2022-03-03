<?php

   echo "Hello","</br>","</br>";

    $mysqli = new mysqli("localhost", "root", "", "monpropreprojet");

    $result = $mysqli->query("SELECT * FROM messages ORDER BY ID LIMIT 3");



    foreach ($result as $message) {


        echo "alias","</br>";
    }




?>