<?php 
include "cookies.php";

                // session_unset();

                if(!isset($_SESSION["name"]))
                {
                    echo "Session expired ";
                }
                else{

                    echo $_SESSION["name"];
                }
               

            ?>