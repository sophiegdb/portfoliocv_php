<?php
$input = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);
echo '<a href="http://portfoliocv/index.php?page=contact"' . $page . '">Contact</a>';

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
        include 'pages/error404.php';
    }



?>
