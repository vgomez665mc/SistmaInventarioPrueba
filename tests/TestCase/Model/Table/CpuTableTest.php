<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CpuTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CpuTable Test Case
 */
class CpuTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CpuTable
     */
    public $Cpu;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cpu',
        'app.income_equipment',
        'app.inventories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cpu') ? [] : ['className' => CpuTable::class];
        $this->Cpu = TableRegistry::get('Cpu', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cpu);

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
}
