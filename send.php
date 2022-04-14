<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Даниил Дурицин</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/master.css">
</head>
<body>

<center><h1 class="send__h">
  <?php

  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $mess = $_POST['mess'];

  $name = htmlspecialchars($name);
  $contact = htmlspecialchars($contact);
  $mess = htmlspecialchars($mess);

  $name = urldecode($name);
  $contact = urldecode($contact);
  $mess = urldecode($mess);

  $name = trim($name);
  $contact = trim($contact);
  $mess = trim($mess);

  if (mail("drevaver0904@gmail.com",
          "Новое сообщение на сайте",
          "Имя: ".$name."\n"."Контакты: ".$contact."\n"."Cообщение: ".$mess,
          "From: new-mess@mydomain.ru \r\n")){
            echo "Письмо успешно отправлено)";
          } else {
            echo "Хм... Где-то ошибка! Перепроверьте форму)";
          }?>
</h1></center>

<center><a href="index.html"><button class="btn__send">На главную</button></a></center>

<footer class="footer">
    <div class="container">
            <div class="wrapper">
          <p class="p__foot">Copyright © Даниил Дурицин</p>
      </div>
    </div>
  </footer>

</body>
</html>