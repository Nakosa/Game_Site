<?php

namespace application\models;

use application\models\User;

class MainUser extends User {

	public function getTitle($route){
		$title['TITLE'] = 'Hello';
		$title['HTML_DESCR'] = 'best description';
		$title['HTML_KEYWORDS'] = 'super keywords';
		
		return $title;
	}

	public function getContent($route){
		$result = [];

		return $result;
	}

}