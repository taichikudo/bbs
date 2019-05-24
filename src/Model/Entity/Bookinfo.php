<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bookinfo Entity
 *
 * @property int $id
 * @property string $bookinfo_isbn
 * @property string $bookinfo_bookname
 * @property int $bookinfo_code
 * @property string $bookinfo_auther
 * @property string $bookinfo_com
 * @property \Cake\I18n\FrozenDate $bookinfo_startday
 */
class Bookinfo extends Entity
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
        // 'bookinfo_isbn' => true,
        'bookinfo_bookname' => true,
        'bookinfo_code' => true,
        'bookinfo_auther' => true,
        'bookinfo_com' => true,
        'bookinfo_startday' => true,
        'bookstate' => true,
        'categories' => true
    ];
}
