<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bookstate Controller
 *
 * @property \App\Model\Table\BookstateTable $Bookstate
 *
 * @method \App\Model\Entity\Bookstate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BookstateController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
         $bookstate = $this->paginate($this->Bookstate);

         $this->set(compact('bookstate'));
    }

    /**
     * View method
     *
     * @param string|null $id Bookstate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bookstate = $this->Bookstate->get($id, [
            'contain' => []
        ]);

        $this->set('bookstate', $bookstate);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {    $bookstate = $this->Bookstate->newEntity();
         if ($this->request->is('post')) {
             $bookstate = $this->Bookstate->patchEntity($bookstate, $this->request->getData());
             if ($this->Bookstate->save($bookstate)) {
                 $this->Flash->success(__('The bookstate has been saved.'));

                 return $this->redirect(['action' => 'result',$bookstate['bookstate_id']]);
             }
             $this->Flash->error(__('The bookstate could not be saved. Please, try again.'));
         }
         $this->set(compact('bookstate'));

    }

    public function result($bookstate_id=null){

      $condition=['conditions'=>['Bookstate.bookstate_id'=>$bookstate_id]];

    $bookstate = $this->Bookstate->find('all',$condition);

    $this->set(compact('bookstate'));

    }

    public function edit($id = null)
    {
        $bookstate = $this->Bookstate->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bookstate = $this->Bookstate->patchEntity($bookstate, $this->request->getData());
            if ($this->Bookstate->save($bookstate)) {
                $this->Flash->success(__('The bookinfo has been saved.'));
                return $this->redirect(['action' => 'result2',$bookstate['bookstate_id']]);
            }
            $this->Flash->error(__('The bookinfo could not be saved. Please, try again.'));
        }
        $this->set(compact('bookstate'));

    }
    public function result2($bookstate_id=null){

      $condition=['conditions'=>['Bookstate.bookstate_id'=>$bookstate_id]];

    $bookstate = $this->Bookstate->find('all',$condition);

    $this->set(compact('bookstate'));

    }
    public function edit2($id = null)
    {
        $bookstate = $this->Bookstate->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bookstate = $this->Bookstate->patchEntity($bookstate, $this->request->getData());
            if ($this->Bookstate->save($bookstate)) {
                $this->Flash->success(__('The bookinfo has been saved.'));
return $this->redirect(['action' => 'result3',$bookstate['bookstate_id']]);
            }
            $this->Flash->error(__('The bookinfo could not be saved. Please, try again.'));
        }
        $this->set(compact('bookstate'));

    }
    public function result3($bookstate_id=null){

      $condition=['conditions'=>['Bookstate.bookstate_id'=>$bookstate_id]];

    $bookstate = $this->Bookstate->find('all',$condition);

    $this->set(compact('bookstate'));

    }

    // public function edit2($id = null)
    // {
    //     $bookstate = $this->Bookstate->get($id, [
    //         'contain' => []
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $bookstate = $this->Bookstate->patchEntity($bookstate, $this->request->getData());
    //         if ($this->Bookstate->save($bookstate)) {
    //             $this->Flash->success(__('The bookinfo has been saved.'));
    //
    //             return $this->redirect(['action' => 'index',$bookstate['bookstate_id']]);
    //         }
    //         $this->Flash->error(__('The bookinfo could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('bookstate'));
    // }
    // public function edit3($id = null)
    // {
    //     $bookstate = $this->Bookstate->get($id, [
    //         'contain' => []
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $bookstate = $this->Bookstate->patchEntity($bookstate, $this->request->getData());
    //         if ($this->Bookstate->save($bookstate)) {
    //             $this->Flash->success(__('The bookinfo has been saved.'));
    //
    //             return $this->redirect(['action' => 'index',$bookstate['bookstate_id']]);
    //         }
    //         $this->Flash->error(__('The bookinfo could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('bookstate'));
    // }
    //

    // public function edit($id = null)
    // {
    //   // $id = $this->request->query['bookstate_id'];
    //
    //   $entity = $this->Bookstate->get($id);
    //   $this->set('entity',$entity);
    //   $this->set('bookstate',$entity);
    // }
    //
    // public function update(){
    //   if ($this->request->is('post')){
    //     $data = $this->request->data['Bookstate'];
    //     $entity = $this->Bookstate->get($data['rental_id']);
    //     $this->Rental->patchEntity($entity,$data);
    //     $entity->rental_return = new Time(date('Y-m-d'));
    //     $this->Rental->save($entity);
    //   }
    //   return $this->redirect(['action'=>'result']);
    // }

    /**
     * Delete method
     *
     * @param string|null $id Bookstate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bookstate = $this->Bookstate->get($id);
        if ($this->Bookstate->delete($bookstate)) {
            $this->Flash->success(__('The bookstate has been deleted.'));
        } else {
            $this->Flash->error(__('The bookstate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
