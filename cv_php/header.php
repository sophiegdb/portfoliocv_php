<?php
session_start(); //crée une session

setcookie('user_id', ['exprires' => time() + 365*24*3600, 'secure' => true, 'httponly' => true,]);
$dateFirstVisit = date ('Y-m-d H:i:s');
$_SESSION = [$dateFirstVisit , $_COOKIE];

?>
<head>
    <meta charset="UTF-8">

    <title> <?= $metaTittle ?></title>
    <meta name="description"content=<?= $metaDescription ?>>
    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php
if(isset($_COOKIE['user_id'])){
   echo 'ID de session' .$_COOKIE['user_id'];
}

?>
</body>
