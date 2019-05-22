<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
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
            ->allowEmptyDate('user_birthday', false);

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
            ->allowEmptyDate('user_out', false);

        return $validator;
    }
}
