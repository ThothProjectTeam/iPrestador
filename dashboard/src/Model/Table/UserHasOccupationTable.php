<?php
namespace App\Model\Table;

use App\Model\Entity\UserHasOccupation;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserHasOccupation Model
 *
 * @property \Cake\ORM\Association\BelongsTo $User
 * @property \Cake\ORM\Association\BelongsTo $Occupation
 */
class UserHasOccupationTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('user_has_occupation');
        $this->displayField('user_id');
        $this->primaryKey(['user_id', 'occupation_id']);
        $this->belongsTo('User', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Occupation', [
            'foreignKey' => 'occupation_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['user_id'], 'User'));
        $rules->add($rules->existsIn(['occupation_id'], 'Occupation'));
        return $rules;
    }
}
