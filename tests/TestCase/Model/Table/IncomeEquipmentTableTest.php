<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IncomeEquipmentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IncomeEquipmentTable Test Case
 */
class IncomeEquipmentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IncomeEquipmentTable
     */
    public $IncomeEquipment;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.income_equipment',
        'app.equipment',
        'app.inventories',
        'app.cpu',
        'app.users',
        'app.officials',
        'app.expenditures_equipment',
        'app.income_equipments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IncomeEquipment') ? [] : ['className' => IncomeEquipmentTable::class];
        $this->IncomeEquipment = TableRegistry::get('IncomeEquipment', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IncomeEquipment);

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
