<?php
namespace App\Controller;

class PostsController extends AppController{

    public function index() {
        $this->set('posts', $this->Posts->find('all'));
    }

    public function add() {
        $post = $this->Posts->newEntity();
        if($this->request->is('post')) {
            $postx = $this->Posts->patchEntity($postx, $this->request->getData());
            $this->Posts->save($postx);
            return $this->redirect(['action'=>'index']);
        }
        $this->set('posts', $postx);
    }
}