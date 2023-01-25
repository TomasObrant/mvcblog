<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

    public function registerAction() {
        if (!empty($_POST)) {
            if (!$this->model->validate(['email', 'login', 'password'], $_POST)) {
                $this->view->message('error', $this->model->error);
            }
            elseif ($this->model->checkEmailExists($_POST['email'])) {
                $this->view->message('error', 'Этот E-mail уже используется');
            }
            elseif (!$this->model->checkLoginExists($_POST['login'])) {
                $this->view->message('error', $this->model->error);
            }
            $this->model->register($_POST);
            $this->view->message('success', 'Регистрация завершена');
            $this->view->redirect('account/login');
        }
        $this->view->render('Регистрация');
    }

    public function loginAction() {
        if (!empty($_POST)) {
            if (!$this->model->validate(['login', 'password'], $_POST)) {
                $this->view->message('error', $this->model->error);
            }
            elseif (!$this->model->checkData($_POST['login'], $_POST['password'])) {
                $this->view->message('error', 'Логин или пароль указан неверно');
            }
            $this->model->login($_POST['login']);
            $this->view->location('account/profile');
        }
        $this->view->render('Вход');
    }

    public function profileAction() {
        $this->view->render('Профиль');
    }

    public function logoutAction() {
        unset($_SESSION['account']);
        $this->view->redirect('account/login');
    }

}