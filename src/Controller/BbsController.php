<?php
namespace App\Controller;

use App\Controller\AppController;

class BookinfoController extends AppController
{
    public function index()
    {
        $bookinfo = $this->paginate($this->Bookinfo);

        $this->set(compact('bookinfo'));
    }

    public function view($id = null)
    {
        $bookinfo = $this->Bookinfo->get($id, [
            'contain' => []
        ]);

        $this->set('bookinfo', $bookinfo);
    }

    public function add()
    {
        $bookinfo = $this->Bookinfo->newEntity();
        if ($this->request->is('post')) {
            $bookinfo = $this->Bookinfo->patchEntity($bookinfo, $this->request->getData());
            if ($this->Bookinfo->save($bookinfo)) {
                $this->Flash->success(__('The bookinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bookinfo could not be saved. Please, try again.'));
        }
        $this->set(compact('bookinfo'));
    }

    public function edit($id = null)
