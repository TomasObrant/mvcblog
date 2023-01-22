<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Post;

class MainController extends Controller {

	public function indexAction() {
        $this->view->render('Главная страница');
	}

    public function shopAction() {
        $this->view->render('Магазин');
    }

    public function productAction() {
        $this->view->render('Магазин');
    }

	public function aboutAction() {
		$this->view->render('Обо мне');
	}

	public function blogAction() {
        $mainModel = new Post;
        $pagination = new Pagination(ltrim($_SERVER['REQUEST_URI'], '/'), $mainModel->postsCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->postsList($this->route),
        ];
        $this->view->render('Блог', $vars);
	}

    public function postAction() {
        $this->view->render('Пост');
    }

	public function pagesAction() {
        $this->view->render('Пагес');
	}

    public function contactAction() {
        if (!empty($_POST)) {
            if (!$this->model->contactValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            mail('dimkl2411@yandex.ru', 'Сообщение: ', $_POST['name'].'|'.$_POST['email'].'|'.$_POST['text']);
            $this->view->message('success', 'форма работает');
        }
        $this->view->render('Контакты');
    }

}