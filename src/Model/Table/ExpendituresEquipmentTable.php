<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExpendituresEquipment Model
 *
 * @property \App\Model\Table\IncomeEquipmentsTable|\Cake\ORM\Association\BelongsTo $IncomeEquipments
 * @property |\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\ExpendituresEquipment get($primaryKey, $options = [])
 * @method \App\Model\Entity\ExpendituresEquipment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ExpendituresEquipment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ExpendituresEquipment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExpendituresEquipment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ExpendituresEquipment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ExpendituresEquipment findOrCreate($search, callable $callback = null, $options = [])
 */
class ExpendituresEquipmentTable extends Table
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

        $this->setTable('expenditures_equipment');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('IncomeEquipment', [
            'foreignKey' => 'income_equipment_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
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
            ->date('fecha_ing')
            ->requirePresence('fecha_ing', 'create')
            ->notEmpty('fecha_ing', 'Rellene este campo');

        $validator
            ->date('fecha_egreso')
            ->requirePresence('fecha_egreso', 'create')
            ->notEmpty('fecha_egreso', 'Rellene este campo');

        $validator
            ->requirePresence('falla', 'create')
            ->notEmpty('falla', 'Rellene este campo');

        $validator
            ->requirePresence('analisis_falla', 'create')
            ->notEmpty('analisis_falla', 'Rellene este campo');


        $validator
            ->requirePresence('reparado', 'create')
            ->notEmpty('reparado', 'Rellene este campo');


        $validator
            ->requirePresence('usuario_recibe', 'create')
            ->notEmpty('usuario_recibe', 'Rellene este campo');

        $validator
            ->requirePresence('usuario_tralasda', 'create')
            ->notEmpty('usuario_tralasda', 'Rellene este campo');


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
        $rules->add($rules->existsIn(['income_equipment_id'], 'IncomeEquipment'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
