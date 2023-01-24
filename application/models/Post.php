<?php

namespace application\models;

use application\core\Model;
//use Imagick;

class Post extends Model {

    public function postValidate($post, $type) {
        $nameLen = iconv_strlen($post['name']);
        $descriptionLen = iconv_strlen($post['description']);
        $textLen = iconv_strlen($post['text']);
        if ($nameLen < 3 or $nameLen > 100) {
            $this->error = 'Название должно содержать от 3 до 100 символов';
            return false;
        } elseif ($descriptionLen < 3 or $descriptionLen > 100) {
            $this->error = 'Описание должно содержать от 3 до 100 символов';
            return false;
        } elseif ($textLen < 10 or $textLen > 5000) {
            $this->error = 'Текст должнен содержать от 10 до 5000 символов';
            return false;
        }
        if (empty($_FILES['img']['tmp_name']) and $type == 'add') {
            $this->error = 'Изображение не выбрано';
            return false;
        }
        return true;
    }

    public function postCreate($post) {
        $params = [
            'id' => '',
            'name' => $post['name'],
            'description' => $post['description'],
            'text' => $post['text'],
            'date' => date('Y-m-d H:i:s'),
        ];
        $this->db->query('INSERT INTO posts VALUES (:id, :name, :description, :text, :date)', $params);
        return $this->db->lastInsertId();
    }

    public function postEdit($post, $id) {
        $params = [
            'id' => $id,
            'name' => $post['name'],
            'description' => $post['description'],
            'text' => $post['text'],
            'date' => date('Y-m-d H:i:s'),
        ];
        $this->db->query('UPDATE posts SET name = :name, description = :description, text = :text, date = :date WHERE id = :id', $params);
    }

    public function postUploadImage($path, $id) {
        move_uploaded_file($path, 'public/materials/'.$id.'.jpg');
//        $img = new Imagick($path);
//        $img->cropThumbnailImage(870, 450);
//        $img->setImageCompressionQuality(80);
//        $img->writeImage('public/materials/'.$id.'.jpg');
    }

    public function isPostExists($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->column('SELECT id FROM posts WHERE id = :id', $params);
    }

    public function postDelete($id) {
        $params = [
            'id' => $id,
        ];
        $this->db->query('DELETE FROM posts WHERE id = :id', $params);
        unlink('public/materials/'.$id.'.jpg');
    }

    public function postData($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->row('SELECT * FROM posts WHERE id = :id', $params);
    }

    public function postsCount() {
        return $this->db->column('SELECT COUNT(id) FROM posts');
    }

    public function postsList($route) {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => ((($route['page'] ?? 1) - 1) * $max),
        ];
        return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
    }

}



