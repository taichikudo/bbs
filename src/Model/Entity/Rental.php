<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Rental extends Entity
{
    protected $_accessible = [
        'rental_user_id' => true,
        'rental_book_id' => true,
        'rental_date' => true,
        'rental_return' => true,
        'rental_etc' => true,
        'rental_user' => true,
        'rental_book' => true
    ];
}
