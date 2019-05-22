<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bookinfo Model
 *
 * @method \App\Model\Entity\Bookinfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bookinfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bookinfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bookinfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bookinfo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bookinfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bookinfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bookinfo findOrCreate($search, callable $callback = null, $options = [])
 */
class BookinfoTable extends Table
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

        $this->setTable('bookinfo');
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
            ->scalar('bookinfo_isbn')
            ->maxLength('bookinfo_isbn', 13)
            ->requirePresence('bookinfo_isbn', 'create')
            ->allowEmptyString('bookinfo_isbn', false);

        $validator
            ->scalar('bookinfo_bookname')
            ->maxLength('bookinfo_bookname', 200)
            ->requirePresence('bookinfo_bookname', 'create')
            ->allowEmptyString('bookinfo_bookname', false);

        $validator
            ->integer('bookinfo_code')
            ->requirePresence('bookinfo_code', 'create')
            ->allowEmptyString('bookinfo_code', false);

        $validator
            ->scalar('bookinfo_auther')
            ->maxLength('bookinfo_auther', 200)
            ->requirePresence('bookinfo_auther', 'create')
            ->allowEmptyString('bookinfo_auther', false);

        $validator
            ->scalar('bookinfo_com')
            ->maxLength('bookinfo_com', 200)
            ->requirePresence('bookinfo_com', 'create')
            ->allowEmptyString('bookinfo_com', false);

        $validator
            ->date('bookinfo_startday')
            ->requirePresence('bookinfo_startday', 'create')
            ->allowEmptyDate('bookinfo_startday', false);

        return $validator;
    }
}
