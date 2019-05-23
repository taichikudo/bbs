<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
class RentalController extends AppController
{
    public function index(){
      $rental = $this->Rental;
      if($this->request->is('post')){
        $rental_user_id = $this->request->getData('rental_user_id');
        $this->log($rental_user_id);
        $condition = ['conditions'=>['rental_user_id'=>$rental_user_id,'rental_return'=>'']];
        $data = $this->Rental->find('all',$condition);
        $this->set('data', $data);

      }
        
      //$this->set(compact('myblogs'));
    }


    public function view($id = null)
    {
        $rental = $this->Rental->get($id, [
            'contain' => ['RentalUsers', 'RentalBooks']
        ]);

        $this->set('rental', $rental);
    }

    public function add()
    {
        $rental = $this->Rental->newEntity();
        if ($this->request->is('post')) {
          $data = $this->request->data['Rental'];
          $entity = $this->Rental->newEntity($data);
          $this->Rental->save($entity);
          $this->set(compact('entity'));
          $this->set(compact('rental'));
            // $rental = $this->Rental->patchEntity($rental, $this->request->getData());
                // $this->set(compact('rental'));
            // if ($this->Rental->save($rental)) {
        //         $this->Flash->success(__('ご登録ありがとうございます.'));
        //
        //         return $this->redirect(['action' => 'index']);
        //     }
        //     $this->Flash->error(__('The user could not be saved. Please, try again.'));
        // }
        // $this->set(compact('rental'));


    }
  }


    public function edit()
    {
      $id = $this->request->query['rental_id'];
      $entity = $this->Rental->get($id);
      $this->set('entity',$entity);
    }

public function update(){
  date_default_timezone_set('Asia/Tokyo');
  if ($this->request->is('post')){
    $data = $this->request->data['Rental'];
    $entity = $this->Rental->get($data['rental_id']);
    $this->Rental->patchEntity($entity,$data);
    $entity->rental_return = new Time(date('Y-m-d'));
    $this->Rental->save($entity);
  }
  return $this->redirect(['action'=>'index']);
}

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rental = $this->Rental->get($id);
        if ($this->Rental->delete($rental)) {
            $this->Flash->success(__('The rental has been deleted.'));
        } else {
            $this->Flash->error(__('The rental could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
