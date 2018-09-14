<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cpu Entity
 *
 * @property int $id
 * @property string $serial
 * @property string $marca
 * @property string $modelo
 * @property string $tipo
 * @property string $tarjeta_madre
 * @property string $procesador
 * @property string $velocidad
 * @property string $memoria
 * @property string $capacidad_hdd
 *
 * @property \App\Model\Entity\IncomeEquipment[] $income_equipment
 * @property \App\Model\Entity\Inventory[] $inventories
 */
class Cpu extends Entity
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
