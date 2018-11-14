<?php

namespace application\core;

class View {

	public $path;
	public $route;
	public $layout = 'default';

	const VIEW_DIR = 'application/views/';

	public function __construct($route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
	}

	public function render($headers, $vars = []){
		#debug([$headers, $vars]);

		$path = self::VIEW_DIR."$this->path.php";
		#debug([$path, file_exists($path)]);

		if(file_exists($path)) {
			extract($vars);
			unset($vars);
			ob_start();
			require $path;
			$content = ob_get_clean();
			$layout = self::VIEW_DIR."layouts/$this->layout.php";
			if(file_exists($layout)){
				extract($headers);
				unset($headers);
				require $layout;
			}
		}
	}

	public function outputAjax($headers = [], $vars = []){
		$content = '';
		$path = self::VIEW_DIR."/$this->path.php";
		#debug([$path, file_exists($path)]);
		if(file_exists($path)) {
			extract($vars);
			unset($vars);
			ob_start();
			require $path;
			#$content = ob_get_clean();
			exit(ob_get_clean());
		}
		#return $content;
	}

	public function redirect($url) {
		header('location: '.$url);
		exit;
	}

	public static function errorCode($code){
		http_response_code($code);
		$path = self::VIEW_DIR."errors/$code.php";
		if (file_exists($path)) {
			ob_start();
			require $path;
			$content = ob_get_clean();
			$title = 'Страница не существует.';
			require self::VIEW_DIR.'layouts/default.php';
		}
		exit;
	}
}	