<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Форма отправки");
?>

<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Отправка заявки на почту</title>

	<link rel="stylesheet" href="/local/templates/template/css/normalize.css">
	
</head>

<body>

  <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 51px 15px; text-align: center;">
	  <h1>Отправить заявку</h1>
    <form id="form" class="form" autocomplete="off">
      <div class="form__input-box">
        <input class="form__input-inp" type="text" id="name" name="name" placeholder="Имя" autocomplete="off">
      </div>
      <div class="form__input-box">
        <input class="form__input-inp" type="tel" id="tel" name="tel" placeholder="+7(___) ___-__-__"
          autocomplete="off">
      </div>
      <div class="form__input-box">
        <textarea class="form__input-inp" name="msg" id="msg" placeholder="Сообщение"></textarea>
      </div>
      <button class="form__btn" type="submit">Отправить сообщение</button>
    </form>
  </div>

  <script src="js/inputmask.min.js"></script>
  <script src="js/just-validate.min.js"></script>
  <script type="module" src="js/main.js"></script>
</body>

</html>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>