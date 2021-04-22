<?
	require_once('php/connect.php');
	$id = $_GET['id'];
	$content = mysqli_query($connect, "SELECT * FROM `recipe` WHERE `id_recipe` = '$id'");
	$content = mysqli_fetch_assoc($content);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FoodHUB</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header class="header">
		<div class="content">
			<div class="logo__place">
				<a href="index.html">
					<img src="img/logo.png" alt="logo">
				</a>
			</div>
		</div>
	</header>

	<main class="main">
		<div class="content">
			<div class="recipe__learnMore__items">
				<div class="recipe__learnMore__img" style="background: url('img/<?=$content['img_recipe']?>') no-repeat;background-size: cover;background-position: 50% 50%;">
				</div>

				<div class="recipe__learnMore__name">
					<?=$content['name_recipe']?>
				</div>

				<div class="recipe__learnMore__title">
					Рецепт:
				</div>

				<div class="recipe__learnMore__text">
					<?=$content['text_recipe']?>
				</div>

				<div class="recipe__uploaded">
					<?=$content['user_recipe']?>
				</div>
			</div>

			<div class="learnMore__form">
				<div class="learnMore__form__title">
					Оставить комментарий
				</div>
				<form name="learnMore__send__comment" class="learnMore__send__comment">
						<input type="text" name="id" hidden="" value="<?=$id?>" />

						<input id="name" type="text" name="name" placeholder="Имя пользователя (свыше 6 знаков)">

						<input id="email" type="email" name="email" placeholder="Email (свыше 6 знаков)">

						<textarea id="text" placeholder="Введите комментарий."></textarea>

						<input type="submit" name="submit" id="btn__submit">
				</form>
			</div>

			<div class="comments__title">
			</div>

			<div id="learnMore__place__for__comments">
			</div>
		</div>
	</main>

	<footer class="footer">
		<div class="upper__footer">
			<div class="content">
				<div class="upper__footer__title">
					Здесь должен быть какой-то текст, чтобы футер не пустовал.
				</div>

				<div class="upper__footer__text">
					Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности представляет собой интересный эксперимент проверки существенных финансовых и административных условий. Повседневная практика показывает, что начало повседневной работы по формированию позиции играет важную роль в формировании форм развития. Не следует, однако забывать, что новая модель организационной деятельности играет важную роль в формировании новых предложений.
				</div>
			</div>
		</div>

		<div class="bottom__footer">
			<div class="content">
				<div class="bottom__footer__social__links">
					<a href="https://vk.com/kseniyakalganova">
						<img src="https://ei.phncdn.com/www-static/images/socialIcons/VK.svg?cache=2021041502" alt="Vkontakte">
					</a>

					<a href="https://www.instagram.com/prudentbanshee/">
						<img src="https://ei.phncdn.com/www-static/images/socialIcons/Instagram.svg?cache=2021041502" alt="Instagram">
					</a>

					<a href="https://discord.gg/Pqwf4punTr">
						<img src="https://ei.phncdn.com/www-static/images/socialIcons/Discord.svg?cache=2021041502" alt="Discord">
					</a>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery-3.6.0.js"></script>
	<script src ="js/comments.js"></script>
</body>
</html>