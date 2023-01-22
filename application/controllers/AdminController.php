<?php

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller {

	public function __construct($route) {
		parent::__construct($route);
		$this->view->layout = 'admin';
	}

    public function indexAction() {
        $this->view->render('AdminPanel');
    }

	public function loginAction() {
		if (isset($_SESSION['admin'])) {
			$this->view->redirect('admin');
		}
		if (!empty($_POST)) {
			if (!$this->model->loginValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			$_SESSION['admin'] = true;
			$this->view->location('admin/');
		}
		$this->view->render('Вход');
	}

	public function logoutAction() {
		unset($_SESSION['admin']);
		$this->view->redirect('admin/login');
	}

}