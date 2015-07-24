<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserHasOccupationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserHasOccupationTable Test Case
 */
class UserHasOccupationTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_has_occupation',
        'app.user',
        'app.occupation'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserHasOccupation') ? [] : ['className' => 'App\Model\Table\UserHasOccupationTable'];
        $this->UserHasOccupation = TableRegistry::get('UserHasOccupation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserHasOccupation);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
