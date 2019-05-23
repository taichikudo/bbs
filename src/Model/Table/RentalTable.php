<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class RentalTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('rental');
        $this->setDisplayField('id');
        $this->setPrimaryKey('rental_id');


$this->belongsTo('Users',[
  'foreignKey'=>'user_id'
]);
$this->belongsTo('Bookstate',[
  'foreignKey'=>'book_id'
]);

    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('rental_id')
            ->allowEmptyString('rental_id', 'create');

        $validator
            ->scalar('rental_date')
            ->requirePresence('rental_date', 'create')
            ->allowEmptyDate('rental_date', true);

        $validator
            ->scalar('rental_return')

            ->requirePresence('rental_return', 'create')
            ->allowEmptyDate('rental_return', true);

        $validator
            ->scalar('rental_etc')
            ->maxLength('rental_etc', 200)
            ->requirePresence('rental_etc', 'create')
            ->allowEmptyString('rental_etc', true);

        return $validator;
    }

  }
