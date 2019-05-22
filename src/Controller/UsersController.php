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

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    public function search()
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

    public function add(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'result']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

public function result() {
  $user_name= $this->request->data['user_name'];
  $user_address= $this->request->data['user_address'];
  $user_tel= $this->request->data['user_tel'];
  $user_email= $this->request->data['user_email'];
  $user_birthday= $this->request->data['user_birthday'];
  $user_password= $this->request->data['user_password'];
  $user_in= $this->request->data['user_in'];
  $user_out= $this->request->data['user_out'];

  $res='ご登録ありがとうございます。'.$user_name.'さん';
  $value=['message'=>$res];
  $this->set($value);
  
}




    public function view2()
    {


    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
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

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
