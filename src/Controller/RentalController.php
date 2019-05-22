<?php
namespace App\Controller;

use App\Controller\AppController;

class RentalController extends AppController
{
    public function index()
    {
        if($this->request->is('post')){
          $find = $this->request->data['Rental']['find'];
          $condition = ['conditions'=>['id'=>$find]];
          $data = $this->Rental->find('all',$condition);
        }else{
          $data = $this->Rental->find('all');
        }
        $this->set('data',$data);
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
            $rental = $this->Rental->patchEntity($rental, $this->request->getData());
            if ($this->Rental->save($rental)) {
                $this->Flash->success(__('The rental has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rental could not be saved. Please, try again.'));
        }
        $rentalUsers = $this->Rental->RentalUsers->find('list', ['limit' => 200]);
        $rentalBooks = $this->Rental->RentalBooks->find('list', ['limit' => 200]);
        $this->set(compact('rental', 'rentalUsers', 'rentalBooks'));
    }

    public function edit($id = null)
    {
        $rental = $this->Rental->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rental = $this->Rental->patchEntity($rental, $this->request->getData());
            if ($this->Rental->save($rental)) {
                $this->Flash->success(__('The rental has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rental could not be saved. Please, try again.'));
        }
        $rentalUsers = $this->Rental->RentalUsers->find('list', ['limit' => 200]);
        $rentalBooks = $this->Rental->RentalBooks->find('list', ['limit' => 200]);
        $this->set(compact('rental', 'rentalUsers', 'rentalBooks'));
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
