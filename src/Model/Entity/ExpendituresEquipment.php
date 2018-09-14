<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExpendituresEquipment Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha_ing
 * @property \Cake\I18n\FrozenDate $fecha_egreso
 * @property string $falla
 * @property string $analisis_falla
 * @property string $reparado
 * @property string $usuario_entrega
 * @property string $usuario_recibe
 * @property string $usuario_tralasda
 * @property string $observaciones
 * @property int $income_equipment_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\IncomeEquipment $income_equipment
 * @property \App\Model\Entity\Official $official
 */
class ExpendituresEquipment extends Entity
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
