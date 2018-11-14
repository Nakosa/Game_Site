<?php

namespace application\models;

use application\models\User;

class AjaxUser extends User {

	const EOL = "\r\n";

	public function __construct(){
		parent::__construct();
		include $_SERVER['DOCUMENT_ROOT'].'/application/config/const.php';
	}

	

	public function wrapData($str){
		return wordwrap($this->clear($str), 70, "\r\n");
	}
}