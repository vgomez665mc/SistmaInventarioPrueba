<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipment Model
 *
 * @property \App\Model\Table\IncomeEquipmentTable|\Cake\ORM\Association\HasMany $IncomeEquipment
 * @property \App\Model\Table\InventoriesTable|\Cake\ORM\Association\HasMany $Inventories
 *
 * @method \App\Model\Entity\Equipment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equipment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equipment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equipment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipment findOrCreate($search, callable $callback = null, $options = [])
 */
class EquipmentTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('equipment');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('IncomeEquipment', [
            'foreignKey' => 'equipment_id'
        ]);
        $this->hasMany('Inventories', [
            'foreignKey' => 'equipment_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
             ->add('id','valid', ['rule' => 'numeric'])
            ->notEmpty('id', 'create');
        $validator
            ->requirePresence('serial', 'create')
            ->notEmpty('serial', 'Rellene este campo');

        $validator
            ->requirePresence('marca', 'create')
            ->notEmpty('marca', 'Rellene este campo');

        $validator
            ->requirePresence('modelo', 'create')
            ->notEmpty('modelo', 'Rellene este campo');

        $validator
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo', 'Rellene este campo');
        return $validator;
    }
}
