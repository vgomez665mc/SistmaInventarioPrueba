<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IncomeEquipment Model
 *
 * @property \App\Model\Table\EquipmentTable|\Cake\ORM\Association\BelongsTo $Equipment
 * @property |\Cake\ORM\Association\BelongsTo $Cpus
 * @property |\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ExpendituresEquipmentTable|\Cake\ORM\Association\HasMany $ExpendituresEquipment
 *
 * @method \App\Model\Entity\IncomeEquipment get($primaryKey, $options = [])
 * @method \App\Model\Entity\IncomeEquipment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IncomeEquipment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IncomeEquipment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IncomeEquipment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IncomeEquipment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IncomeEquipment findOrCreate($search, callable $callback = null, $options = [])
 */
class IncomeEquipmentTable extends Table
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

        $this->setTable('income_equipment');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Equipment', [
            'foreignKey' => 'equipment_id'
        ]);
        $this->belongsTo('Cpu', [
            'foreignKey' => 'cpu_id'
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
            ->add('id','valid', ['rule' => 'numeric'])
            ->notEmpty('id', 'create');

        $validator
            ->requirePresence('cod_ing', 'create')
            ->notEmpty('cod_ing', 'Rellene este campo');

        $validator
            ->date('fecha_ing')
            ->requirePresence('fecha_ing', 'create')
            ->notEmpty('fecha_ing', 'Rellene este campo');


        $validator
            ->requirePresence('solicitante', 'create')
            ->notEmpty('solicitante', 'Rellene este campo');


        $validator
            ->requirePresence('caracteristicas', 'create')
            ->notEmpty('caracteristicas', 'Rellene este campo');

        $validator
            ->requirePresence('motivo_ing', 'create')
            ->notEmpty('motivo_ing', 'Rellene este campo');


        $validator
            ->requirePresence('usuario_recb', 'create')
            ->notEmpty('usuario_recb', 'Rellene este campo');


        $validator
            ->requirePresence('usuario_traslada', 'create')
            ->notEmpty('usuario_traslada', 'Rellene este campo');


        $validator
            ->requirePresence('analisis_falla', 'create')
            ->notEmpty('analisis_falla', 'Rellene este campo');

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
        $rules->add($rules->existsIn(['equipment_id'], 'Equipment'));
        $rules->add($rules->existsIn(['cpu_id'], 'Cpu'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
