<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bookstate Entity
 *
 * @property int $id
 * @property string $bookstate_isbn
 * @property string $bookstate_name
 * @property \Cake\I18n\FrozenDate $bookstate_in
 * @property \Cake\I18n\FrozenDate $bookstate_out
 * @property string $bookstate_etc
 */
class Bookstate extends Entity
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
        'bookstate_isbn' => true,
        'bookstate_name' => true,
        'bookstate_in' => true,
        'bookstate_out' => true,
        'bookstate_etc' => true,
        'rental' => true,
        'bookinfo' => true
    ];
}
