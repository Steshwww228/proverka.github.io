<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Заголовок</title>
</head>

<body>
	<footer>
		<h2>Контактная форма</h2>
		<div class="form-container">
			<div class="note"></div>
			<div class="fields">
				<form class="ajax-contact-form" action="">
					<p><input type="text" name="name" value="" placeholder="Имя"></p>
					<div class="row">
						<div class="col"><input type="tel" name="tel" value="" placeholder="Телефон"></div>
						<div class="col"><input type="email" name="email" value="" placeholder="E-mail"></div>
						</div>
					<label>Текст</label>
					<textarea name="message" cols="40" rows="3"></textarea>
					<input type="submit" name="submit" class="form-container__btn" value="Отправить">
				</form>
			</div>
		</div>
	</footer>
	<script>
        jQuery(document).ready(function($) {

$(".ajax-contact-form").submit(function() {
var str = $(this).serialize();

$.ajax({
type: "POST",
url: "https://steshwww228.github.io./emailstrecker.php",
data: str,
success: function(msg) {
if(msg == 'OK') {
result = '<p>Ваш заказ принят</p>';
$(".fields").hide();
} else {
result = msg;
}
$('.note').html(result);
}
});
return false;
});
});
    </script>
</body>

</html>
