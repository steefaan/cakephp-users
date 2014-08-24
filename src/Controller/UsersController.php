<?php

namespace Users\Controller;

class UsersController extends UsersAppController {

	public function login() {
		$this->Flash->set('Flash Message Test (Public).');
	}

}
