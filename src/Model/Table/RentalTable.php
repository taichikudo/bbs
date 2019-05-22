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
        $this->setPrimaryKey('id');

        $this->belongsTo('RentalUsers', [
            'foreignKey' => 'rental_user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('RentalBooks', [
            'foreignKey' => 'rental_book_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->date('rental_date')
            ->requirePresence('rental_date', 'create')
            ->allowEmptyDate('rental_date', false);

        $validator
            ->date('rental_return')
            ->requirePresence('rental_return', 'create')
            ->allowEmptyDate('rental_return', false);

        $validator
            ->scalar('rental_etc')
            ->maxLength('rental_etc', 200)
            ->requirePresence('rental_etc', 'create')
            ->allowEmptyString('rental_etc', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['rental_user_id'], 'RentalUsers'));
        $rules->add($rules->existsIn(['rental_book_id'], 'RentalBooks'));

        return $rules;
    }
}
