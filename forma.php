<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Обратная связь</title>
	<meta name="description" content="Описание страницы" />
	<meta name="keywords" content="Ключевые слова" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="js/ajax.js"></script>
	</head>
<body> 
    <?php include "header.php" ?>

<div class="maket">
    <?php include "menus.php" ?>
                
    <section id="content">
        <h2>Обратная связь</h2>
            <form id="ajax_form" action="" method="post">
                <p><input class="feedback-input" name="name" autocomplete="off" type="text" placeholder="Имя"/></p>
                <p><input class="feedback-input" name="email" autocomplete="off" type="email" placeholder="Email"/></p>
                <p><input class="feedback-input" name="sub" autocomplete="off" type="text" placeholder="Тема сообщения"/></p>
                <p><textarea class="feedback-input" name="body" placeholder="Сообщение"/></textarea></p>
                <p><input class="button-submit" id="btn" value="Отправить" type="button" /></p>
            </form>
    </section>
            
</div>

<footer> 
    <?php include "footer.php" ?>
</footer>
</body>
</html>

