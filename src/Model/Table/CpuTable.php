<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cpu Model
 *
 * @property \App\Model\Table\IncomeEquipmentTable|\Cake\ORM\Association\HasMany $IncomeEquipment
 * @property \App\Model\Table\InventoriesTable|\Cake\ORM\Association\HasMany $Inventories
 *
 * @method \App\Model\Entity\Cpu get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cpu newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cpu[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cpu|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cpu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cpu[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cpu findOrCreate($search, callable $callback = null, $options = [])
 */
class CpuTable extends Table
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

        $this->setTable('cpu');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('IncomeEquipment', [
            'foreignKey' => 'cpu_id'
        ]);
        $this->hasMany('Inventories', [
            'foreignKey' => 'cpu_id'
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

        $validator
            ->requirePresence('tarjeta_madre', 'create')
            ->notEmpty('tarjeta_madre', 'Rellene este campo');

        $validator
            ->requirePresence('procesador', 'create')
            ->notEmpty('procesador', 'Rellene este campo');

        $validator
            ->requirePresence('velocidad', 'create')
            ->notEmpty('velocidad', 'Rellene este campo');

        $validator
            ->requirePresence('memoria', 'create')
            ->notEmpty('memoria', 'Rellene este campo');

        $validator
            ->requirePresence('capacidad_hdd', 'create')
            ->notEmpty('capacidad_hdd', 'Rellene este campo');

        return $validator;
    }
}
