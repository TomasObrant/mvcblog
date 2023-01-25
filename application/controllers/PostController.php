<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Post;

class PostController extends Controller {

    public function __construct($route) {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }

    public function indexAction() {
        $mainModel = new Post;
        $pagination = new Pagination(ltrim($_SERVER['REQUEST_URI'], '/'), $mainModel->postsCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->postsList($this->route),
        ];
        $this->view->render('Посты', $vars);
    }

    public function createAction() {

        if (!empty($_POST)) {

            if (!$this->model->postValidate($_POST, 'create')) {
                $this->view->message('error', $this->model->error);
            }

            $id = $this->model->postCreate($_POST);
            if (!$id) {
                $this->view->message('success', 'Ошибка обработки запроса');
            }

            $this->model->postUploadImage($_FILES['img']['tmp_name'], $id);
            $this->view->message('success', 'Пост добавлен');
            $this->view->redirect('admin/post');
        } else {
            $this->view->render('Добавить пост');
        }
    }

    public function editAction() {
        if (!$this->model->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }

        if (!empty($_POST)) {
            if (!$this->model->postValidate($_POST, 'edit')) {
                $this->view->message('error', $this->model->error);
            }
            $this->model->postEdit($_POST, $this->route['id']);
            if ($_FILES['img']['tmp_name']) {
                $this->model->postUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
            }
            $this->view->message('success', 'Сохранено');
        }
        $vars = [
            'data' => $this->model->postData($this->route['id'])[0],
        ];

        $this->view->render('Редактировать пост', $vars);
    }

    public function deleteAction() {
        if (!$this->model->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $this->model->postDelete($this->route['id']);
        $this->view->redirect('admin/post');
    }

}