<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rental Model
 *
 * @property \App\Model\Table\RentalUsersTable|\Cake\ORM\Association\BelongsTo $RentalUsers
 * @property \App\Model\Table\RentalBooksTable|\Cake\ORM\Association\BelongsTo $RentalBooks
 *
 * @method \App\Model\Entity\Rental get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rental newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rental[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rental|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rental saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rental patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rental[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rental findOrCreate($search, callable $callback = null, $options = [])
 */
class RentalTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
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
  'foreignKey'=>'rental_book_id'
]);

// $this->belongsTo('Bookinfo',[
//   'foreignKey'=>'book_id'
// ]);

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
