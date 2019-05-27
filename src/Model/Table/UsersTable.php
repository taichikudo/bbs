<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('user_id');

        $this->hasMany('Rental',[
          'foreinkey'=>'rental_user_id'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id', 'create');

        $validator
            ->scalar('user_name')
            ->maxLength('user_name', 100)
            ->requirePresence('user_name', 'create')
            ->allowEmptyString('user_name', false);

        $validator
            ->scalar('user_address')
            ->maxLength('user_address', 100)
            ->requirePresence('user_address', 'create')
            ->allowEmptyString('user_address', false);

        $validator
            ->scalar('user_tel')
            ->maxLength('user_tel', 14)
            ->requirePresence('user_tel', 'create')
            ->allowEmptyString('user_tel', false);

        $validator
            ->scalar('user_email')
            ->maxLength('user_email', 50)
            ->requirePresence('user_email', 'create')
            ->allowEmptyString('user_email', false);

        $validator
            ->date('user_birthday')
            ->requirePresence('user_birthday', 'create')
            ->allowEmptyDate('user_birthday', true);

        $validator
            ->scalar('user_password')
            ->maxLength('user_password', 100)
            ->requirePresence('user_password', 'create')
            ->allowEmptyString('user_password', false);

        $validator
            ->date('user_in')
            ->requirePresence('user_in', 'create')
            ->allowEmptyDate('user_in', false);

        $validator
            ->date('user_out')
            ->requirePresence('user_out', 'create')
            ->allowEmptyDate('user_out', true);

        return $validator;
    }
}
