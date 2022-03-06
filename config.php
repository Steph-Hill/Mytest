<?php

        $host = "localhost";

        $user = "root";

        $password = "";

        $database = "mycreation";




                /* @ is used to suppress default error messages */
                $mysqli = @new mysqli($host, $user, $password, $database);

                if ($mysqli->connect_errno) {

                    echo("Probleme de connexion ! veuillez recommencer la connexion");

                    exit();
               
                }

                
                
                

           









?>