<?php

namespace Users\Controller;

use App\Controller\AppController;

class UsersAppController extends AppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = [
		'Flash' => ['element' => 'Commons.Bootstrap/default']
	];

	/**
	 * Helpers
	 *
	 * @var array
	 */
	public $helpers = ['Commons.FontAwesome'];

}
