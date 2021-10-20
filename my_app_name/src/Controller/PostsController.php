<?php
namespace App\Controller;

class PostsController extends AppController {

    public function index() {
        $this->paginate = [
            'limit'=> '5'
        ];
        $posta = $this->paginate($this->Posts->find('all'));
        $this->set('posts', $posta);
    }
    /*
     * 데이터 추가
     */
    public function add() {
        $postx = $this->Posts->newEntity();
        if($this->request->is('post')) {
            $postx = $this->Posts->patchEntity($postx, $this->request->getData());
            $postx->created = date('Y-m-d H:i:s');
            $postx->modified = date('Y-m-d H:i:s');
            if($this->Posts->save($postx)) {
            return $this->redirect(['action'=>'index']);
            }
        }
        $this->set('posts', $postx);
    }

    /*
     * 데이터 수정
     */
    public function edit($id) {
        $posty = $this->Posts->get($id);
        if($this->request->is(['post', 'put'])) {
            $posty = $this->Posts->patchEntity($posty, $this->request->getData());
            $posty->modified = date('Y-m-d H:i:s');
            $this->Posts->save($posty);
            return $this->redirect(['action'=>'index']);
        }
        $this->set('name', $posty->name);
        $this->set('detail', $posty->detail);
        $this->set('posts', $posty);
    }
    
    /*
     * 데이터 삭제
     */
    public function delete($id) {
        $this->request->allowMethod(['post', 'delete']);
        $postz = $this->Posts->get($id);
        $this->Posts->delete($postz);
        return $this->redirect(['action'=>'index']);
    }
}