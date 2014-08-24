<?php

namespace Users\Controller\Admin;

use Users\Controller\UsersAppController;

class UsersController extends UsersAppController {

	public function login() {
		$this->Flash->set('Flash Message Test (Admin).');
	}
}
