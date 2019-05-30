<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use App\Form\UsersForm;
use Cake\Auth\DefaultPasswordHasher;


class UsersController extends AppController
{

    public function index() {
      $user　= new UsersForm();
      if($this->request->is('post')){
        if ($user->execute($this->request->data)) {
        $find = $this->request->data['user_id'];
        $condition = ['conditions'=>['user_id'=>$find]];
        $data = $this->Users->find('all',$condition);
        $this->Flash->success('正常です');
      }else{
        $this->Flash->error('整数で入力してください。');
      }
      $this->set(compact('data'));
    }
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
        $condition = ['conditions'=>['user_id'=>$data]];
        $data = $this->Users->find('all',$condition);
        // if($data->count()===0){
        //   return $this->redirect(['action'=>'searchresult']);
        // }
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
        $entity = '';
          // $url=$this->referer();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entity = $this->Users->patchEntity($user, $this->request->getData());
            $entity->user_in = date('Y-m-d',strtotime($user['user_in']));
            if ($this->Users->save($entity)) {
                $this->Flash->success(__('変更完了しました.'));

                  // return $this->redirect($url);
              return $this->redirect(['action' => 'searchresult',$user['user_id']]);
            }
            $this->Flash->error(__('変更に失敗しました. もう一度入力してください.'));
        }
        $this->set('user',$user);
        $this->set('entity',$user);
    }




    public function remove($user_id=null)
    {
      $entity = $this->Users->get($user_id);
      $this->set(compact('entity'));
    }

    public function removefinish() {
      if ($this->request->is('post')){
        $data = $this->request->data['Users']['user_id'];
        $condition = [
          'conditions'=>[
            'and'=>[
              'rental_user_id' => $data,
              'rental_return IS'=> null]]];
        $entity = $this->Users->Rental->find('all',$condition);
        if (empty($entity->toArray())) {
          $entity = $this->Users->get($data);
          // $this->Users->patchEntity($entity,$data);
          date_default_timezone_set('Asia/Tokyo');
          $entity->user_out = date('Y-m-d');
          $this->Users->save($entity);

        }else{
          return $this->redirect(['controller'=>'Rental','action'=>'index',$data]);
          // return $this->redirect(['action'=>'add']);
        }
 // return $this->redirect(['action'=>'index']);
    }
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
