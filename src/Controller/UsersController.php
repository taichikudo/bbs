<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{

    public function index() {
      if($this->request->is('post')){
        $find = $this->request->data['user_id'];
        $condition = ['conditions'=>['user_id'=>$find]];
        $data = $this->Users->find('all',$condition);
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

    public function searchresult($user_id = null) {
      if($this->request->is('post')){
        $data = $this->request->data['user_id'];
        $entity=$this->Users->get($data);
        $condition = ['conditions'=>['user_id'=>$data]];
        $data = $this->Users->find('all',$condition);
      }elseif(!$user_id==null){
        $condition = ['conditions'=>['user_id'=>$user_id]];
        $data = $this->Users->find('all',$condition);
      }else{
        $data=$this->Users->find('all');
      }
      $this->set(compact('data'));
    }



    public function add()
   {
       $user = $this->Users->newEntity();
       if ($this->request->is('post')) {
         $data = $this->request->data['Users'];
         $entity = $this->Users->patchEntity($user,$data);
        if($this->Users->save($entity)) {
           return $this->redirect(['action' => 'result']);
         } else{
             $this->Flash->error(__('入力方法に間違いがあります。もう一度入力してください'));
         }
         $this->set(compact('entity'));
         $this->set(compact('user'));


   }
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
          // $url=$this->referer();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('変更完了しました.'));

                  // return $this->redirect($url);
              return $this->redirect(['action' => 'searchresult',$user['user_id']]);
            }
            $this->Flash->error(__('変更に失敗しました. もう一度入力してください.'));
        }
        $this->set(compact('user'));
        $this->set('entity',$user);
    }




    public function remove($user_id=null)
    {
    if($this->request->is('post')) {
        $user3=$this->request->data['Users']['user_id'];
      $condition=array('conditions'=>array('and'=>array('Rental.rental_user_id' => $user3,'Rental.rental_return IS'=> null)));
      $data=$this->Users->Rental->find('all',$condition);
      if (count($data)==0) {
        return $this->redirect(['action'=>'removefinish']);
      }else{
        return $this->redirect(['controller'=>'Rental','action'=>'edit',$user3]);
        // return $this->redirect(['action'=>'add']);
      }
    }
      $entity = $this->Users->get($user_id);
      $this->set(compact('entity'));
    }

    public function removefinish() {
      if ($this->request->is('post')){
        $data = $this->request->data['Users'];
        $entity = $this->Users->get($data['user_id']);
        $this->Users->patchEntity($entity,$data);
        date_default_timezone_set('Asia/Tokyo');
        $entity->user_out = date('Y-m-d');
        $this->Users->save($entity);
 }
 // return $this->redirect(['action'=>'index']);


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
