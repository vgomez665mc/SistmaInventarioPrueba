<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipment Entity
 *
 * @property int $id
 * @property string $serial
 * @property string $marca
 * @property string $modelo
 * @property string $tipo
 *
 * @property \App\Model\Entity\IncomeEquipment[] $income_equipment
 * @property \App\Model\Entity\Inventory[] $inventories
 */
class Equipment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
