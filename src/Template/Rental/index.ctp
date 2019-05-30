<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<fieldset>
  <head>
    <meta charset="utf-8">
    <title>会員検索画面</title>
    <?= $this->Html->css('book/search.css') ?>
    <?= $this->fetch('css') ?>
  </head>
  <body>
    <div class="search">
      <legend>会員ID検索</legend>
      <?=$this->Form->create(null,
      ['type'=>'post',
      'url'=>['controller'=>'Rental',
      'action'=>'index']])?>
      <!-- <div>半角英数字で入力してください</div> -->
      <div id="formTxt"><?=$this->Form->text('rental_user_id');?>
        <?=$this->Form->submit('検索',['class'=>'searchBtn'])?></div>
      <?=$this->Form->end()?>
    </div>

    <div class="rental form columns content">

    <?php if(isset($data)){ ?>
      <br>
      <p><legend>検索結果</legend></p>
      <br>
      <h3>貸出情報</h3>
      <ul>
        <li>会員ID：<?=$rental_user_id?></li>
      </ul>
    <?php if(empty($data->toArray())){ ?>
      <p>貸出中の資料はありません。</p>
    <?php }elseif(!empty($data->toArray())){ ?>

      <!-- <h3 class="nonfloat">貸出台帳</h3> -->
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('rental_user_id','会員ID'); ?></th>
                <th scope="col"><?= $this->Paginator->sort('rental_book_id','資料ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rental_book_name','資料名') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rental_date','貸出年月日') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rental_limit','返却期日') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rental_over','延滞') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rental_etc','備考') ?></th>
                <th scope="col" class="actions"><?= $this->Paginator->sort('アクション') ?></th>
            </tr>
        </thead>
      <?php foreach($data->toArray() as $obj): ?>
    <tr>
      <?php $bbs++; ?>
      <td><?= h($obj->rental_user_id) ?></td>
      <td><?= h($obj->rental_book_id) ?></td>
      <td><?= h($obj->bookstate->bookstate_name) ?></td>
      <td><?= h(date('Y-m-d',strtotime($obj->rental_date))) ?></td>
      <td><?php
      $remon = strtotime($obj->bookstate->bookinfo->bookinfo_startday);
      $budou = $remon + 2592000;
      $suika = date('Y-m-d');
      $ringo= strtotime($suika);
      $mikan =  strtotime($obj->rental_date);

      if($budou>=$ringo){
        $momo = $mikan + 864000;
          echo date('Y-m-d',$momo);
      }else{
        $momo = $mikan + 1296000;
        echo date('Y-m-d',$momo);
      }
       ?></td>
       <td><?php
       $remon = strtotime($obj->bookstate->bookinfo->bookinfo_startday);
       $budou = $remon + 2592000;
       $suika = date('Y-m-d');
       $ringo= strtotime($suika);
       $mikan =  strtotime($obj->rental_date);
       if($budou>=$ringo){
         $momo = $mikan + 864000;
       }else{
         $momo = $mikan + 1296000;
       }
     if($momo<=$ringo){
       echo "貸出期限が過ぎています";
       $a+=1;
     }else{
       echo "";
       $a+=0;
     }
        ?></td>


      <td><?= h($obj->rental_etc) ?></td>
      <td><a href="<?=$this->Url->build(['controller'=>'Rental',
         'action'=>'edit']);?>?rental_id=<?=$obj->rental_id ?>">返却</td>
    </tr>
    <?php endforeach; ?>
    <?php } ?>
    <?php
    if($a>=1){
    echo "貸出期限を過ぎているものがあります";
    }else{
    if(isset($bbs)){
    $limit = 5 - $bbs;
    if($bbs>=5){
      echo 'これ以上の貸し出しはできません';

    }else{?>
      <h5>あと <span id="limit"><?=$limit?>冊</span> 借りることができます。</h5>
        <a class="searchBtn btnLeft2" href="<?=$this->Url->build(['controller' => 'Rental', 'action' => 'add', $obj->rental_user_id,$rental_user_id]); ?>">新規貸出</a><br>
    <?php }
    }
}
}?>
</div>
  </body>
</fieldset>

</html>
