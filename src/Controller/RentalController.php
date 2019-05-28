<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;


class RentalController extends AppController
{
  public function initialize(){
    parent::initialize();

    $this->loadComponent('Paginator');
    //モデルのロード
    $this->loadModel('Bookinfo');
    $this->loadModel('Bookstate');

  }
    public function index(){
      $rental = $this->Rental;
      if($this->request->is('post')){
        $rental_user_id = $this->request->getData('rental_user_id');
        $this->log($rental_user_id);
        // $condition = ['conditions'=>['and'=>['rental_user_id'=>$rental_user_id,'rental_return'=>NULL]]];
        $condition = [
          'conditions'=>[
            'rental_user_id'=>$rental_user_id,
            'rental_return IS NULL'],
          'contain'=>[
            'Bookstate'=>['Bookinfo']
          ]];
        $data = $this->Rental->find('all',$condition);

        $this->set('data', $data);
        $bbs = 0;
        $this->set(compact('bbs'));

      }


      //$this->set(compact('myblogs'));
    }

public function result(){

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
            $entity->rental_date = new Time(date('Y/m/d'));
          $this->Rental->save($entity);
          $this->set(compact('entity'));
          $this->set(compact('rental'));
            return $this->redirect(['action' => 'index']);
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
  return $this->redirect(['action'=>'result']);
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
