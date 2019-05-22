<?php
namespace App\Controller;

use App\Controller\AppController;


class Controller extends AppController
{

public $useTable = false;

  public function initialize() {
    parent::initalize();
    $this->loadComponent('Paginator');
    $this->loadModel('Users');
    $this->loadModel('Bookinfo');
    $this->loadModel('Bookstate');
    $this->loadModel('Rental');

    $this->viewBuilder()->setLayout('');

  }

    public function index() {


    }

    public function view() {
      if ($this->request->isPost()) {
        $find=$this->request->data['Bookstate']['find'];
        $condition=['conditions'=>['name like'=>$find]];
        $data=$this->Bookstate->find('all',$condition);
      }else{
        $data=$this->Bookstate->find('all');
      }
      $this->set(compact('data'));

    }
}
 ?>
