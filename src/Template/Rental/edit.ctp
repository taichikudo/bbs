<fieldset>
<?=$this->Form->create($entity,
    ['type'=>'post',
    'url'=>['controller'=>'Rental',
    'action'=>'update']]) ?>
<?=$this->Form->hidden('Rental.rental_id',['value'=>$this->request->query['rental_id']])?>
<h4>以下を返却しますか？</h4><br>

<tbody>
<table>



<th>会員ID</th><th>資料ID</th><th>資料名</th><th>貸出日</th><th>備考</th>
</tr>

</thead>
<?php foreach($data->toArray() as $obj): ?>
<tr>
<td><?= $entity->rental_user_id?></td>
<td><?= $entity->rental_book_id?></td>
<td>
<?= $obj->bookstate->bookstate_name ?></td>
<?php endforeach; ?>
<td><?= h(date('Y-m-d',strtotime($entity->rental_date)))?></td>
<td><?= $entity->rental_etc?></td>


</table>
</tr>
</table>
</tbody>
<?=$this->Form->submit('返却',['class'=>'searchBtn btnLeft']) ?>
<?=$this->Form->end()?>

</fieldset>
