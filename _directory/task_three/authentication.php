<?php
    $_user = "Cachinhos1408";
    $_password = "roboti12408";
    $_a =  time() + (86400*30);

    if($_POST['login'] === $_user && $_POST['password'] === $_password)
    {
        setcookie("authenticated", "true", $_a, "/");
        header('Location: logout.html');

    

    }
    else{
        header('Location: index.html');

    }
?>
