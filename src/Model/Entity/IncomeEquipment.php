<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * IncomeEquipment Entity
 *
 * @property int $id
 * @property string $cod_ing
 * @property \Cake\I18n\FrozenDate $fecha_ing
 * @property string $solicitante
 * @property string $caracteristicas
 * @property string $motivo_ing
 * @property string $usuario_recb
 * @property string $usuario_traslada
 * @property string $observaciones
 * @property int $equipment_id
 * @property int $cpu_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\Equipment $equipment
 * @property \App\Model\Entity\Cpu $cpu
 * @property \App\Model\Entity\Official $official
 * @property \App\Model\Entity\ExpendituresEquipment[] $expenditures_equipment
 */
class IncomeEquipment extends Entity
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
