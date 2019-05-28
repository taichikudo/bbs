<?php
error_reporting(0);
?>
<?= $msg?>
<article>
<p>会員ID検索</p>
<?=$this->Form->create(null,
['type'=>'post',
'url'=>['controller'=>'Rental',
'action'=>'index']])?>
<!-- <div>半角英数字で入力してください</div> -->
<div><?=$this->Form->text('rental_user_id');?></div>
<div><?=$this->Form->submit('検索')?></div>
<?=$this->Form->end()?>



<!--
      <h3>検索結果</h3>
<th>会員ID</th><th>資料ID</th><th>貸出日</th><th>返却期日</th><th>資料名</th><th>返却日</th><th>備考</th>
    </tr>
  </thead> -->
<?php if(isset($data)) { ?>
  <hr>
  <table>
    <thead>
      <tr>
  <h3>検索結果</h3>
<th>会員ID</th><th>資料ID</th><th>貸出日</th><th>返却期日</th><th>資料名</th><th>延滞</th><th>備考</th>
</tr>
  </thead>
  <?php foreach($data->toArray() as $obj): ?>
<tr>
  <?php $bbs++; ?>
  <td><?= h($obj->rental_user_id) ?></td>
  <td><?= h($obj->rental_book_id) ?></td>
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


   <td><?= h($obj->bookstate->bookstate_name) ?></td>
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

   <td><?= h($obj->rental_return) ?></td>
   <td><?= h($obj->rental_etc) ?></td>


  <!-- <td>
    <?php $apple = strtotime($obj->rental_date);
    $sumple=$apple + 1209600;
    echo date('Y-m-d',$sumple); ?>
  </td> -->


<!-- <td><?= h(date('Y-m-d',strtotime($obj->bookstate->bookinfo->bookinfo_startday))) ?></td> -->


<!-- <?php $apple=$obj->rental_date ?> -->



  <td><?= h($obj->rental_return) ?></td>
  <td><?= h($obj->rental_etc) ?></td>
  <td><a href="<?=$this->Url->build(['controller'=>'Rental',
     'action'=>'edit']);?>?rental_id=<?=$obj->rental_id ?>">返却</td>
</tr>
<?php endforeach; ?>
<?php } ?>
<?php ?>
<?php
if($a>=1){
echo "貸出期限を過ぎているものがあります";
}else{
if(isset($bbs)){
$limit = 5 - $bbs;
if($bbs>=5){
  echo 'これ以上の貸し出しはできません';

}else{
  echo $limit .'冊借りることができます';?>
    <p><a href="<?= $this->Url->build(['controller' => 'Rental', 'action' => 'add']) ?>">新規貸出</a></p>

<?php } }}?>





</article>
