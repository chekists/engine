<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="/css/login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	
	<form action="/login" method="post" class="form__login">
	<h1 class="chapter">Авторизация пользователя</h1>
		<input class="input" type="text" name="name" placeholder="Логин" required="">
		<input class="input" type="password" name="password" placeholder="Пароль" required="">
		<input class="button" type="submit" name="login" value="Войти">
	</form>
</body>
</html>