<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bookstate Model
 *
 * @method \App\Model\Entity\Bookstate get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bookstate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bookstate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bookstate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bookstate saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bookstate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bookstate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bookstate findOrCreate($search, callable $callback = null, $options = [])
 */
class BookstateTable extends Table
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

        $this->setTable('bookstate');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('bookstate_isbn')
            ->maxLength('bookstate_isbn', 13)
            ->requirePresence('bookstate_isbn', 'create')
            ->allowEmptyString('bookstate_isbn', false);

        $validator
            ->scalar('bookstate_name')
            ->maxLength('bookstate_name', 200)
            ->requirePresence('bookstate_name', 'create')
            ->allowEmptyString('bookstate_name', false);

        $validator
            ->date('bookstate_in')
            ->requirePresence('bookstate_in', 'create')
            ->allowEmptyDate('bookstate_in', false);

        $validator
            ->date('bookstate_out')
            ->requirePresence('bookstate_out', 'create')
            ->allowEmptyDate('bookstate_out', false);

        $validator
            ->scalar('bookstate_etc')
            ->maxLength('bookstate_etc', 200)
            ->requirePresence('bookstate_etc', 'create')
            ->allowEmptyString('bookstate_etc', false);

        return $validator;
    }
}
