<?php




        setcookie("authenticated", "", time() - 3600, "/" );
        header('Location: index.html');








?>