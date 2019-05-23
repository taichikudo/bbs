<?php
namespace App\Controller;

use App\Controller\AppController;

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

    public function add(){
      $entity = $this ->Rental->newEntity();
      $this->set('entity',$entity);
    }

    public function create(){
      if ($this->request->is('post')){
        $data = $this->request->$data['Rental'];
        $entity = $this->Rental->newEntity($data);
        $this->Rental->save($entity);
      }
      return $this->redirect(['action'=>'index']);
    }

    public function edit()
    {
      $id = $this->request->query['rental_id'];
      $entity = $this->Rental->get($id);
      $this->set('entity',$entity);
    }

public function update(){
  if ($this->request->is('post')){
    $data = $this->request->data['Rental'];
    $entity = $this->Rental->get($data['rental_id']);
    $this->Rental->patchEntity($entity,$data);
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
