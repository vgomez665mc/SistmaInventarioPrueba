<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventoriesFixture
 *
 */
class InventoriesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cpu_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'equipment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Inventories_cpu1_idx' => ['type' => 'index', 'columns' => ['cpu_id'], 'length' => []],
            'fk_Inventories_equipment1_idx' => ['type' => 'index', 'columns' => ['equipment_id'], 'length' => []],
            'fk_Inventories_users1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_Inventories_cpu1' => ['type' => 'foreign', 'columns' => ['cpu_id'], 'references' => ['cpu', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Inventories_equipment1' => ['type' => 'foreign', 'columns' => ['equipment_id'], 'references' => ['equipment', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Inventories_users1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'id' => 1,
            'cpu_id' => 1,
            'equipment_id' => 1,
            'user_id' => 1
        ],
    ];
}
