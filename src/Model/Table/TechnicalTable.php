<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Technical Model
 *
 * @property \App\Model\Table\ExpendituresEquipmentTable|\Cake\ORM\Association\HasMany $ExpendituresEquipment
 * @property \App\Model\Table\IncomeEquipmentTable|\Cake\ORM\Association\HasMany $IncomeEquipment
 *
 * @method \App\Model\Entity\Technical get($primaryKey, $options = [])
 * @method \App\Model\Entity\Technical newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Technical[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Technical|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Technical patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Technical[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Technical findOrCreate($search, callable $callback = null, $options = [])
 

echo $this->Form->input('fecha_ing', ['label'=>'Fecha Ingreso','class' => 'datepicker-input' ,'type' => 'text', 'format' => 'Y-m-d', 'default' => date('Y-m-d',strtotime('-1 day')), 'value' => !empty($item->date) ? $item->date->format('Y-m-d',strtotime('-1 day')) : date('Y-m-d',strtotime(' +1 day ')),'class'=>'form-control input-sm']);


 */
class TechnicalTable extends Table
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

        $this->setTable('technical');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('ExpendituresEquipment', [
            'foreignKey' => 'technical_id'
        ]);
        $this->hasMany('IncomeEquipment', [
            'foreignKey' => 'technical_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('nombre');

        $validator
            ->allowEmpty('apellido');

        $validator
            ->allowEmpty('cedula');

        $validator
            ->allowEmpty('username');

        $validator
            ->allowEmpty('correo');

        $validator
            ->allowEmpty('telefono');

        $validator
            ->allowEmpty('sexo');

        $validator
            ->allowEmpty('dependencia');

        $validator
            ->allowEmpty('cargo');

        $validator
            ->allowEmpty('rol');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
