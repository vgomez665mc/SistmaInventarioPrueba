<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property |\Cake\ORM\Association\HasMany $ExpendituresEquipment
 * @property |\Cake\ORM\Association\HasMany $IncomeEquipment
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre', 'Rellene este campo');

        $validator
            ->requirePresence('apellido', 'create')
            ->notEmpty('apellido', 'Rellene este campo');

        $validator
            ->add('cedula', 'valid', ['rule' => 'numeric', 'message' => 'Ingrese solo numeros'])
            ->requirePresence('cedula', 'create')
            ->notEmpty('cedula', 'Rellene este campo');


        $validator
            ->add('correo', 'valid', ['rule' => 'email', 'message' => 'Ingrese un correo electrónico válido.'])
            ->requirePresence('correo', 'create')
            ->notEmpty('correo', 'Rellene este campo');


        $validator
             ->add('telefono', 'valid', ['rule' => 'numeric', 'message' => 'Ingrese  solo numeros'])
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono', 'Rellene este campo');

        $validator
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo', 'Rellene este campo');

        $validator
            ->requirePresence('dependencia', 'create')
            ->notEmpty('dependencia', 'Rellene este campo');


        $validator
            ->requirePresence('cargo', 'create')
            ->notEmpty('cargo', 'Rellene este campo');


        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username', 'Rellene este campo');

        $validator
            ->requirePresence('role', 'create')
            ->notEmpty('role', 'Rellene este campo');


        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password', 'Rellene este campo');

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
        $rules->add($rules->isUnique(['username'],'ya existe un usuario con este username'));
        return $rules;
    }

    public function recoverPassword($id){
        $user = $this->get($id);
        return $user->password;

    }
    
}
