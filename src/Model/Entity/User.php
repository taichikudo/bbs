<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $user_name
 * @property string $user_address
 * @property string $user_tel
 * @property string $user_email
 * @property \Cake\I18n\FrozenDate $user_birthday
 * @property string $user_password
 * @property \Cake\I18n\FrozenDate $user_in
 * @property \Cake\I18n\FrozenDate $user_out
 */
class User extends Entity
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
        'user_name' => true,
        'user_address' => true,
        'user_tel' => true,
        'user_email' => true,
        'user_birthday' => true,
        'user_password' => true,
        'user_in' => true,
        'user_out' => true
    ];
}
