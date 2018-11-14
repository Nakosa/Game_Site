<?php

namespace application\controllers;

use application\controllers\UserController;

class MainUserController extends UserController {

	private function render($content){
		if($this->is_ajax()){
			$this->view->outputAjax($content);
		}else{
			$this->view->render($this->model->getTitle($this->route), $content);
		}
	}

	public function mainAction() {
		$this->render($this->model->getContent($this->route));
	}

	public function loginAction() {
		$this->render($this->model->getContent($this->route));
	}

	public function registrationAction() {
		$this->render($this->model->getContent($this->route));
	}


	private function is_ajax(){
		return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']);
	}
}