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
    public function index($kudo=null){
      $msg = '会員番号を入力してください';
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

      }elseif($kudo!==null){
        $condition = [
          'conditions'=>[
            'rental_user_id'=>$kudo,
            'rental_return IS NULL'],
          'contain'=>[
            'Bookstate'=>['Bookinfo']
          ]];
        $data = $this->Rental->find('all',$condition);
        $this->set('data', $data);
        $bbs = 0;
        $this->set(compact('bbs'));



      }

$this->set('msg',$msg);
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
            $entity->rental_date = new Time(date('Y/m/d'));
          $this->Rental->save($entity);
          $this->set(compact('entity'));
          $this->set(compact('rental'));
            return $this->redirect(['action' => 'index',$data['rental_user_id']]);
    }
  }


    public function edit()
    {
      $id = $this->request->query['rental_id'];
      $entity = $this->Rental->get($id);
      $this->set('entity',$entity);
      $condition = [
        'conditions'=>[
          'rental_id'=>$id,
          'rental_return IS NULL'],
        'contain'=>[
          'Bookstate'=>['Bookinfo']
        ]];
      $data = $this->Rental->find('all',$condition);

      $this->set('data', $data);
      // $data = $this->request->data['Rental'];
      // $entity = $this->Rental->get($data['rental_id']);

      }

public function update(){
  date_default_timezone_set('Asia/Tokyo');
  if ($this->request->is('post')){
    $data = $this->request->data['Rental'];
    $entity = $this->Rental->get($data['rental_id']);
    $this->Rental->patchEntity($entity,$data);
    $entity->rental_return = new Time(date('Y-m-d'));
    $this->Rental->save($entity);
    $this->set(compact('rental'));
    $this->set(compact('entity'));
  }
  return $this->redirect(['action'=>'result','rental_id' => $entity['rental_id']]);
}
public function result(){
    $rental_id = $this->request->query['rental_id'];
    $entity = $this->Rental->get($rental_id);
    $this->set('entity',$entity);
  
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
