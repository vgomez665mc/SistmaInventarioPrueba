<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Technical Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $cedula
 * @property string $username
 * @property string $correo
 * @property string $telefono
 * @property string $sexo
 * @property string $dependencia
 * @property string $cargo
 * @property string $rol
 *
 * @property \App\Model\Entity\ExpendituresEquipment[] $expenditures_equipment
 * @property \App\Model\Entity\IncomeEquipment[] $income_equipment
 */
class Technical extends Entity
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
