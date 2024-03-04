<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController{
    public function index() {
        $search = $this->request->getQuery('search');
        $conditions = [

            'OR'=>[
                'nome LIKE'=>"%{$search}%",
            ]
        ];

        $this->paginate =[
           'limit'=> 3,
           'conditions'=>$conditions
           
        ];

        $usuarios = $this->paginate($this->Users);
        //$usuarios = $this->Users->find()->all();
        $this->set(compact('usuarios'));
      
    }


    public function add(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData()); // Corrigido para patchEntity
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Usuário não foi cadastrado com sucesso.'));
            }
        }
        $this->set(compact('user'));
    }


    public function search()  {
        $data = $this->request->getData();
        $result = array_filter(array_map('trim',$data));
      

        $url = [
            'controller'=>'Users',
            'action' => 'index',
            '?'=> $result
        ];

        return $this->redirect($url);
    }

    

}


