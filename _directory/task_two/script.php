<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $randow = rand(1, 100);
        echo"<p>".$randow."</p>";
    }







?>