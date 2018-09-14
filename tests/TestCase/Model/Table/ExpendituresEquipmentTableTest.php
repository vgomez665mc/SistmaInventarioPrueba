<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExpendituresEquipmentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExpendituresEquipmentTable Test Case
 */
class ExpendituresEquipmentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExpendituresEquipmentTable
     */
    public $ExpendituresEquipment;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.expenditures_equipment',
        'app.income_equipments',
        'app.officials'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ExpendituresEquipment') ? [] : ['className' => ExpendituresEquipmentTable::class];
        $this->ExpendituresEquipment = TableRegistry::get('ExpendituresEquipment', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExpendituresEquipment);

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
