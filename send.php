<?php
$fio = $_POST['message'];
$fio = htmlspecialchars($fio);
$fio = urldecode($fio);
$fio = trim($fio);
//echo $fio;
//echo "<br>";
//echo $email;
mail("finnthehuman913@gmail.com",
     "Тема",
     "Сообщение: ".$fio."\n".

     "From: script@mail.ru \r\n")
 {
 header("Location: /thank_you.html");
   }
   
   else {
        echo ("Error");
   }
   
   ?>