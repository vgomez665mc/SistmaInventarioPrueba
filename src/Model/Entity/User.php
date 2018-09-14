<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;


/**
 * User Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $cedula
 * @property string $correo
 * @property string $telefono
 * @property string $sexo
 * @property string $dependencia
 * @property string $cargo
 * @property string $username
 * @property string $estacion
 * @property string $role
 * @property string $password
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];


 protected function _setPassword($value){
        if (!empty($value))
        {
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash($value);
        }
        else
        {
            $id_user = $this->_properties['id'];//permite recuperar un usuario en base al identificador q se le pase en este caso es id
            $user = TableRegistry::get('Users')->recoverPassword($id_user);//se llama a la tabla user, y con recoverpasswors se le pasa el identificador del usuario recuperado
            return $user;
        }

    }


}
