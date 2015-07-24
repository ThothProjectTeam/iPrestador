<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserHasOccupationFixture
 *
 */
class UserHasOccupationFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'user_has_occupation';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'occupation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_user_has_occupation_occupation1_idx' => ['type' => 'index', 'columns' => ['occupation_id'], 'length' => []],
            'fk_user_has_occupation_user_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['user_id', 'occupation_id'], 'length' => []],
            'fk_user_has_occupation_occupation1' => ['type' => 'foreign', 'columns' => ['occupation_id'], 'references' => ['occupation', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_user_has_occupation_user' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['user', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'user_id' => 1,
            'occupation_id' => 1
        ],
    ];
}
