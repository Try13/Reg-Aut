<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>Личный кабинет</title>
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/lk.css" />
</head>

<body>
	<div class="container mt-5">
		<h1 class="text-center mb-3">Личный кабинет</h1>
		<p class="text-light">
			<span class="material-symbols-outlined"> person </span>
			Имя:
			<span><?php echo $_SESSION["name"]; ?></span>
			<span class="edit_btn">[ Изменить ]</span>
			<span class="save_btn" hidden data-item="name">[ Сохранить ]</span>
			<span class="cancel_btn" hidden>[ Отменить ]</span>
		</p>
		<p class="text-light">
			<span class="material-symbols-outlined"> person </span>
			Фамилия:
			<span><?php echo $_SESSION["lastname"]; ?></span>
			<span class="edit_btn">[ Изменить ]</span>
			<span class="save_btn" hidden data-item="lastname">[ Сохранить ]</span>
			<span class="cancel_btn" hidden>[ Отменить ]</span>
		</p>
		<p class="text-light">
			<span class="material-symbols-outlined"> mail </span>
			E-mail: <?php echo $_SESSION["email"]; ?>
		</p>
		<p class="text-light">
			<span class="material-symbols-outlined"> tag </span>
			Id: <?php echo $_SESSION["id"]; ?>
		</p>
	</div>
	<script src="/js/lk.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>
