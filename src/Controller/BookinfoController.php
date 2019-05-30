<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bookinfo Controller
 *
 * @property \App\Model\Table\BookinfoTable $Bookinfo
 *
 * @method \App\Model\Entity\Bookinfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BookinfoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $bookinfo = $this->paginate($this->Bookinfo);

        $this->set(compact('bookinfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Bookinfo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bookinfo = $this->Bookinfo->get($id, [
            'contain' => []
        ]);

        $this->set('bookinfo', $bookinfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bookinfo = $this->Bookinfo->newEntity();
        if ($this->request->is('post')) {
            $bookinfo = $this->Bookinfo->patchEntity($bookinfo, $this->request->getData());
            if ($this->Bookinfo->save($bookinfo)) {
                $this->Flash->success(__('追加完了しました。'));

                return $this->redirect(['action' => 'result',$bookinfo['bookinfo_isbn']]);
            }
            $this->Flash->error(__('入力方法に間違いがあります。もう一度入力してください。'));
        }
        $this->set(compact('bookinfo'));
    }
    public function result($isbn=null){

      $condition=['conditions'=>['Bookinfo.bookinfo_isbn'=>$isbn]];

  $bookinfo = $this->Bookinfo->find('all',$condition);
  //$user2 = $this->Users->get($user_id);
  $this->set(compact('bookinfo'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Bookinfo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function edit($id = null)
    // {
    //     $bookinfo = $this->Bookinfo->get($id, [
    //         'contain' => []
    //     ]); 
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $bookinfo = $this->Bookinfo->patchEntity($bookinfo, $this->request->getData());
    //         if ($this->Bookinfo->save($bookinfo)) {
    //             $this->Flash->success(__('The bookinfo has been saved.'));
    //
    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The bookinfo could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('bookinfo'));
    // }
    public function edit($id = null)
    {
        $bookinfo = $this->Bookinfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bookinfo = $this->Bookinfo->patchEntity($bookinfo, $this->request->getData());
            if ($this->Bookinfo->save($bookinfo)) {
                $this->Flash->success(__('変更完了しました。'));
  return $this->redirect(['action' => 'result2',$bookinfo['bookinfo_isbn']]);
            }
            $this->Flash->error(__('入力方法に間違いがあります。もう一度入力してください。'));
        }
        $this->set(compact('bookinfo'));
    }



    public function result2($bookinfo_isbn=null){

      $condition=['conditions'=>['Bookinfo.bookinfo_isbn'=>$bookinfo_isbn]];

    $bookinfo = $this->Bookinfo->find('all',$condition);

    $this->set(compact('bookinfo'));

    }

    /**
     * Delete method
     *
     * @param string|null $id Bookinfo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bookinfo = $this->Bookinfo->get($id);
        if ($this->Bookinfo->delete($bookinfo)) {
            $this->Flash->success(__('The bookinfo has been deleted.'));
        } else {
            $this->Flash->error(__('The bookinfo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
