<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

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
}
