<meta http-equiv='refresh' content='6; url=http://dushas.ru'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['sub'])) {$sub = $_POST['sub']; if ($sub == '') {unset($sub);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}
 
if (isset($name) && isset($email) && isset($sub) && isset($body))
   {
    $address = "warriorikan@gmail.com";
    $mes = "Имя: $name \nE-mail: $email \nТема: $sub \nТекст: $body";
    $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
    if ($send == 'true')
         { ?>
          <script language="javascript" type="text/javascript">
           alert('Сообщение успешно отправлено! Нажмите кнопку ниже, чтобы вернуться на сайт');
          window.location = 'forma.php';
          </script>
          <?php
         }
    else { ?>
           <script language="javascript" type="text/javascript">
             alert('К сожалению, не удалось отправить сообщение. Нажмите кнопку ниже, чтобы вернуться на сайт');
           window.location = 'forma.php';
           </script>
           <?php
         }
   }
else { ?>
     <script language="javascript" type="text/javascript">
        alert('Вы заполнили не все поля. Нажмите кнопку ниже, чтобы вернуться на сайт');
        window.location = 'forma.php';
     </script>
     <?php
     }
