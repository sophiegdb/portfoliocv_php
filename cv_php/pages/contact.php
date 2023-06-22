<?php
$metaTittle = "contact";
$metaDescription = "contact";
?>
<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactt</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <h1>Contact</h1>
    <div class="container-block1">
        <p> Sophie de Breuvand<br>
            0677286021<br>
            <a href="mailto:sophiedaumas@hotmail.com">Ecrivez moi!</a>

    </div>
    <div class="formulaire2contact">
        <form action="index.php?page=contact" method="post">
            <label for="Civilité">Civilité</label>
            <select name="Civilité" id="Civilité">
                <option value="">--Choisissez une option svp--</option>
                <option value="Mme">Mme</option>
                <option value="M">M</option>
            </select>
            <br>
            <br>
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <br>
            <div>
                <label for="name">Prenom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <br>
            <div>
                <label for="mail">e-mail&nbsp;:</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <br>
            <div>
                <label for="telephone">télephone&nbsp;:</label>
                <input type="telephone" id="tel" name="user_tel">
            </div>
            <br>
            <div>
                <fieldset>
                    <legend>Raison du contact:</legend>

                    <div>
                        <input type="radio" id="Proposition d'emploi" name="drone" value="Proposition d'emploi"
                               checked>
                        <label for="Proposiion d'emploi">Proposition d'emploi</label>
                        <input type="radio" id="demande d'info" name="drone" value="Demande d'information">
                        <label for="demande d'info">Demande d'information</label>
                    </div>
                </fieldset>
            </div>
            <br>
            <div>
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
            <br>
            <div class="button">
                <button type="submit">Envoyer le message</button>
            </div>
        </form>
    </div>
    <br>
    <br>
    <form class="radio-button">
        <p>Comment souhaitez vous etre contacté?</p>
        <div>
          <input type="radio" id="contactChoice1"
           name="contact" value="email">
          <label for="contactChoice1">Email</label>
      
          <input type="radio" id="contactChoice2"
           name="contact" value="telephone">
          <label for="contactChoice2">Téléphone</label>
        </div>
        <div>
          <button type="submit">Envoyer</button>
        </div>
      </form>
      <br>
      <br>
        <a href="cv.php">Page 1</a>
        <a href="hobby.php">Page 2</a>
</body>
</html>
<?php include 'footer.php';?>