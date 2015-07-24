<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * User Model
 *
 */
class UserTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('user');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->allowEmpty('name');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
            
        $validator
            ->allowEmpty('password');
            
        $validator
            ->allowEmpty('role');
            
        $validator
            ->add('enable', 'valid', ['rule' => 'boolean'])
            ->requirePresence('enable', 'create')
            ->notEmpty('enable');
            
        $validator
            ->add('created_at', 'valid', ['rule' => 'datetime'])
            ->requirePresence('created_at', 'create')
            ->notEmpty('created_at');
            
        $validator
            ->add('modified_at', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('modified_at');
            
        $validator
            ->add('excluded_at', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('excluded_at');
            
        $validator
            ->allowEmpty('phone');
            
        $validator
            ->allowEmpty('cell_phone');

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
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
