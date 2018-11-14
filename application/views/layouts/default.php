<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo isset($TITLE) ? $TITLE : ''; ?></title>
	<meta name="description" content="<?php echo isset($HTML_DESCR) ? $HTML_DESCR : ''; ?>" />
	<meta name="keywords" content="<?php echo isset($HTML_KEYWORDS) ? $HTML_KEYWORDS : ''; ?>" />
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
	<div class="loader"></div>
	<div class="header">
		<div class="logo" id="logo_redir">
			<div class="banter-loader">
				<div class="banter-loader__box"></div>
				<div class="banter-loader__box"></div>
				<div class="banter-loader__box"></div>
				<div class="banter-loader__box"></div>
				<div class="banter-loader__box"></div>
				<div class="banter-loader__box"></div>
				<div class="banter-loader__box"></div>
				<div class="banter-loader__box"></div>
				<div class="banter-loader__box"></div>
			</div>
		</div>
		<div class="main_nav">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="/">Первая</a></li>
				<li><a href="/">Вторая</a></li>
			</ul>
		</div>
		<div class="site_bar">
		<?php if(isset($IS_AUTH)): ?>
			<div class="site_bar__info">Hello `User`</div>
			<div class="site_bar__btns">
				<button class="btn_bar m" id="bar_settings">Настройки</button>
				<button class="btn_bar m" id="bar_logout">Выход</button>
			</div>
		<?php else: ?>
			<div class="site_bar__btns">
				<button class="btn_bar b" id="bar_login">Вход</button>
				<button class="btn_bar b" id="bar_reg">Регистрация</button>
			</div>
		<?php endif; ?>
		</div>
	</div>
	<div class="wrapper" id="main_content">
		<?php echo $content; ?>
	</div>
	<div class="footer"></div>
	<div class="scripts">
		<script src="/assets/js/script.js"></script>
		<script src="/assets/js/jquery.js"></script>
	</div>
</body>
</html>