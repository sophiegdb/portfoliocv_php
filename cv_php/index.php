<?php

    if ($_GET ['page'] == 'cv'){
        include 'pages/cv.php';
    }

    elseif ($_GET ['page'] == 'hobby'){
        include 'pages/hobby.php';
}

    elseif ($_GET ['page'] == 'contact'){
        include 'pages/contact.php';
    }
    else {
        return ;
    }



?>
