<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersStationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersStationsTable Test Case
 */
class UsersStationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersStationsTable
     */
    public $UsersStations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_stations',
        'app.users',
        'app.income_equipment',
        'app.stations',
        'app.cpu',
        'app.inventories',
        'app.equipment'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersStations') ? [] : ['className' => UsersStationsTable::class];
        $this->UsersStations = TableRegistry::get('UsersStations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersStations);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
