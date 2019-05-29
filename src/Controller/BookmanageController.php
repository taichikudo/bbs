<?php
  namespace App\Controller;
  use App\Controller\AppController;

  class BookmanageController extends Appcontroller{
    public $useTable = false;
    //初期化処理
    public function initialize(){
      parent::initialize();
      $this->loadComponent('Paginator');
      //モデルのロード
      $this->loadModel('Bookinfo');
      $this->loadModel('Bookstate');
    }

    public function index(){
      if($this->request->is('post')){
        $isbn_code = $this->request->data['bookinfo_isbn'];
        $condition_info = ['conditions'=>['bookinfo_isbn'=>$isbn_code]];
        $condition_state = ['conditions'=>['bookstate_isbn'=>$isbn_code]];

        $datainfo = $this->Bookinfo->find('all',$condition_info);
        $datastate = $this->Bookstate->find('all',$condition_state);

        $bookinfo = $this->paginate($datainfo,[
          'limit' => 5
        ]);
        $bookstate = $this->paginate($datastate,[
          'limit' => 50
        ]);

        // $bookinfo = $this->paginate('Bookinfo',[
        //   'limit' => 5
        // ]);
        // $bookstate = $this->paginate('Bookstate',[
        //   'limit' => 5
        // ]);
    // }else{
    //   $bookinfo = $this->paginate('Bookinfo',[
    //     'limit' => 5
    //   ]);
    //   $bookstate = $this->paginate('Bookstate',[
    //     'limit' => 5
    //   ]);
    }
    $this->set(compact('bookinfo'));
    $this->set(compact('bookstate'));
  }
}

 ?>
