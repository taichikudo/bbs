<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rental Entity
 *
 * @property int $id
 * @property int $rental_user_id
 * @property int $rental_book_id
 * @property \Cake\I18n\FrozenDate $rental_date
 * @property \Cake\I18n\FrozenDate $rental_return
 * @property string $rental_etc
 *
 * @property \App\Model\Entity\RentalUser $rental_user
 * @property \App\Model\Entity\RentalBook $rental_book
 */
class Rental extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
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
