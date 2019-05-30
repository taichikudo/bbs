<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class UsersForm extends Form
{
  protected function _buildSchema(Schema $schema)
  {
    // フィールドの設定です。
    return $schema
      ->addField('user_id', ['type'=>'integer']);

  }

  protected function _buildValidator(Validator $validator)
  {
    // バリデーションはここに書きます。
    return $validator
      ->notEmpty('user_id')
      ->integer('user_id',[
        'message' => '整数で入力して下さい']);
  }

  protected function _execute(array $data)
  {
    // バリデーションが通った時に実行されます。
    // ここでは単にtrueを返すだけです。
    return true;
  }
}
