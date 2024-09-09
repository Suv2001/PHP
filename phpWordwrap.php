<?php
    $str = "Suvendu <br> dash </br> <i> Adhikary </i>";

   echo Strip_tags($str);

   echo wordwrap($str, 4, "<br>", TRUE);

?>