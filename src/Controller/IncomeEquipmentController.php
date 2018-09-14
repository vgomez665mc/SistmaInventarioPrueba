        <?php
        namespace App\Controller;

        use App\Controller\AppController;
        use Cake\Validation\Validator;
        use Cake\ORM\Query;
        use Cake\ORM\RulesChecker;
        use App\Model\Validation\ContactValidator;


        /**
         * IncomeEquipment Controller
         *
         * @property \App\Model\Table\IncomeEquipmentTable $IncomeEquipment
         *
         * @method \App\Model\Entity\IncomeEquipment[] paginate($object = null, array $settings = [])
         */
        class IncomeEquipmentController extends AppController
        {

         public function isAuthorized($user)
            {
                if(isset($user['role']) and $user['role']== 'tecnico'){
                    if(in_array($this->request->action,['index','view','add','edit','delete'])){
                        return true;
                    }
                }
                return parent::isAuthorized($user);
            }

            /**
             * Index method
             *
             * @return \Cake\Http\Response|void
             */
            public function index()
            {
                
                $incomeEquipment = $this->IncomeEquipment->find("all");
                $this->set(compact('incomeEquipment','rol'));
                $this->set('_serialize', ['incomeEquipment']);
            }

            /**
             * View method
             *
             * @param string|null $id Income Equipment id.
             * @return \Cake\Http\Response|void
             * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
             */
            public function view($id = null)
            {

                        $incomeEquipment = $this->IncomeEquipment->get($id);

            $this->viewBuilder()->options(['pdfConfig' => ['orientation' => 'portrait','filename' => 'Ingreso_' . $incomeEquipment->cod_ing. '.pdf']]);


                $this->set('incomeEquipment', $incomeEquipment);
                $this->set('_serialize', ['incomeEquipment']);
            }

            /**
             * Add method
             *
             * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
             */
            public function add()
            {   
               $incomeEquipment = $this->IncomeEquipment->newEntity();
                $query= $this->IncomeEquipment->find('all')->toArray();
                $codigo=count($query)+1;
              
                if ($this->request->is('post') ) {
                    $incomeEquipment = $this->IncomeEquipment->patchEntity($incomeEquipment, $this->request->getData());
                    
                    if ( empty( $this->request->data["user_id"] )){

                         $this->Flash->error(__('Ha ocurrido un error,  no ingreso usuario recibe'));
                    }else{

                        $incomeEquipment->usuario_recb = $this->request->data["user_id"];

                    }

                   if ( empty($this->request->data["cpu_id"] ) && empty($this->request->data["equipment_id"] ) ){

                         $this->Flash->error(__('Ha ocurrido un error, intente nuevamente ingrese un Cpu o un Equipo'));
                    }
                    if ( $incomeEquipment->equipment_id &&  empty($incomeEquipment->cpu_id )  ){

                         $incomeEquipment->cpu_id = NULL;
                         $incomeEquipment->equipment_id = $this->request->data["equipment_id"];
                    }

                    if ( ($incomeEquipment->cpu_id ) && empty($incomeEquipment->equipment_id ) ){

                         $incomeEquipment->cpu_id = $this->request->data["cpu_id"];
                         $incomeEquipment->equipment_id = NULL;    
                         debug($incomeEquipment->equipment_id);

                    }
                    $this->IncomeEquipment->save($incomeEquipment);
                    if (( $incomeEquipment->usuario_recb && $incomeEquipment->cpu_id  &&  $this->IncomeEquipment->save($incomeEquipment)) || ( $incomeEquipment->usuario_recb && $incomeEquipment->equipment_id &&  $this->IncomeEquipment->save($incomeEquipment)) ) {

                        $this->Flash->success(__('Se ha creado el ingreso satisfactoriamente'));

                        return $this->redirect(['action' => 'index']);
                    }
                    $this->Flash->error(__('Ha ocurrido un error, intente nuevamente ingresando todos los campos'));
                }
                $equipment= $this->loadmodel('Equipment')->find('all')->toArray();
                $cpu= $this->loadmodel('Cpu')->find('all')->toArray();
                $usuario= $this->loadmodel('Users')->find('all')->toArray();
                $users = $this->IncomeEquipment->Users->find('list', ['limit' => 200]);
                $this->set(compact('incomeEquipment', 'equipment', 'cpu', 'usuario','users','equipment','incomeEquip','codigo'));
                $this->set('_serialize', ['incomeEquipment']);

            }


            /**
             * Edit method
             *
             * @param string|null $id Income Equipment id.
             * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
             * @throws \Cake\Network\Exception\NotFoundException When record not found.
             */
            public function edit($id = null)
            {
                $query= $this->IncomeEquipment->find('all')->toArray();
                $incomeEquipment = $this->IncomeEquipment->get($id);

                if ($this->request->is(['patch', 'post', 'put'])) {
                    $incomeEquipment = $this->IncomeEquipment->patchEntity($incomeEquipment, $this->request->getData());
                    if ($this->IncomeEquipment->save($incomeEquipment)) {
                        $this->Flash->success(__('Se ha editado exitosamente el ingreso.'));

                        return $this->redirect(['action' => 'index']);
                    }
                    $this->Flash->error(__('Tha ocurrido un error intente nuevamente.'));
                }
                $equipment = $this->IncomeEquipment->Equipment->find('list', ['limit' => 200]);
                $cpu = $this->IncomeEquipment->Cpu->find('list', ['limit' => 200]);
                $users = $this->IncomeEquipment->Users->find('list', ['limit' => 200]);
                $codigo=count($query)+1;


                $this->set(compact('incomeEquipment', 'equipment', 'cpu', 'users','codigo'));
                $this->set('_serialize', ['incomeEquipment']);
            }

            /**
             * Delete method
             
             <?php for($i=1; $i<=(10-$cantidad); $i++): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor;?>
             *
             * @param string|null $id Income Equipment id.
             * @return \Cake\Http\Response|null Redirects to index.
             * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
             */
            public function delete($id = null)
            {
                $this->request->allowMethod(['post', 'delete']);
                $incomeEquipment = $this->IncomeEquipment->get($id);
                $egreso= $this->loadmodel('ExpendituresEquipment')->get($id);

                if ($this->IncomeEquipment->delete($incomeEquipment)) {
                    if ($egreso->id) {
                        $this->ExpendituresEquipment->delete($egreso);
                    }

                    $this->Flash->success(__('El ingreso se ha eliminado satisfactoriamente.'.$incomeEquipment->cod_ing));
                } else {
                    $this->Flash->error(__('No se pudo eliminar el ingreso,intenete nuevamente'));
                }

                return $this->redirect(['action' => 'index']);
            }
        }
