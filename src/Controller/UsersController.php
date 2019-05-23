<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index()
    {
      if($this->request->is('post')){
        $find = $this->request->data['Users']['find'];
        $condition = ['conditions'=>['name'=>$find]];
        $data = $this->Users->find('all',$condition);
      }else{
        $data=$this->Users->find('all');
      }
      $this->set(compact('data'));
    }

    public function view($user_id = null)
    {
        $user = $this->Users->get($user_id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    public function search_result(){
      if($this->request->is('post')){
        $find = $this->request->data['Users']['find'];
        $condition = ['conditions'=>['name'=>$find]];
        $data = $this->Users->find('all',$condition);
      }else{
        $data=$this->Users->find('all');
      }
      $this->set(compact('data'));
    }

    public function add(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('ご登録ありがとうございます.'));

                return $this->redirect(['action' => 'result']);
            }
            $this->Flash->error(__('この内容ではご登録できません.'));
        }
        $this->set(compact('user'));
    }

public function result() {
  $condition=['order'=>['Users.user_id'=>'desc'],'limit'=>1];

  $users = $this->Users->find('all',$condition);
  //$user2 = $this->Users->get($user_id);
  $this->set(compact('users'));
}





    public function edit($user_id = null)
    {
        $user = $this->Users->get($user_id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function delete($user_id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($user_id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
