<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher; //index

class User extends Entity
{
    protected $_accessible = [
        'user_name' => true,
        'user_address' => true,
        'user_tel' => true,
        'user_email' => true,
        'user_birthday' => true,
        'user_password' => true,
        'user_in' => true,
        'user_out' => true,
        'rental'=>true,

    ];

    protected $_hidden = [
      'user_password'
    ];

    protected function _setPassword($user_password){
      return (new DefaultPasswordHasher)->hash($user_password);
    }
}
