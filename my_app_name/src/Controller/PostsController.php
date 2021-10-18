<?php
namespace App\Controller;

class PostsController extends AppController{

    public function index() {
        $this->set('posts', $this->Posts->find('all'));
    }
//데이터 추가
    public function add() {
        $postx = $this->Posts->newEntity();
        if($this->request->is('post')) {
            $postx = $this->Posts->patchEntity($postx, $this->request->getData());
            $this->Posts->save($postx);
            return $this->redirect(['action'=>'index']);
        }
        $this->set('posts', $postx);
    }
}