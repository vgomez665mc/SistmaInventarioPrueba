    <?php
    namespace App\Controller;

    use App\Controller\AppController;
    use Cake\Validation\Validator;
    use Cake\ORM\Query;
    use Cake\ORM\RulesChecker;
    use App\Model\Validation\ContactValidator;

    /**
     * ExpendituresEquipment Controller
     *
     * @property \App\Model\Table\ExpendituresEquipmentTable $ExpendituresEquipment
     *
     * @method \App\Model\Entity\ExpendituresEquipment[] paginate($object = null, array $settings = [])
     */
    class ExpendituresEquipmentController extends AppController
    {

        /**
         * Index method
         *
         * @return \Cake\Http\Response|void
         */
        public function index()
        { 
            $expendituresEquipment = $this->ExpendituresEquipment->find("all");
            $this->set(compact('expendituresEquipment'));
            $this->set('_serialize', ['expendituresEquipment']);
        }

        /**
         * View method
         *
         * @param string|null $id Expenditures Equipment id.
         * @return \Cake\Http\Response|void
         * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
         */
        public function view($id = null)
        {
            $expendituresEquipment = $this->ExpendituresEquipment->get($id);

            $this->viewBuilder()->options(['pdfConfig' => ['orientation' => 'portrait','filename' => 'Egreso' . '.pdf']]);

            $this->set('expendituresEquipment', $expendituresEquipment);
            $this->set('_serialize', ['expendituresEquipment']);
        }

        /**
         * Add method
         *
         * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
         */
        public function add()
        {
            $expendituresEquipment = $this->ExpendituresEquipment->newEntity();
            if ($this->request->is('post')) {
                $expendituresEquipment = $this->ExpendituresEquipment->patchEntity($expendituresEquipment, $this->request->getData());
                if ($this->ExpendituresEquipment->save($expendituresEquipment)) {
                    $this->Flash->success(__('The expenditures equipment has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The expenditures equipment could not be saved. Please, try again.'));
            }
            $incomeEquipment = $this->ExpendituresEquipment->IncomeEquipment->find('list', ['limit' => 200]);
            $users = $this->ExpendituresEquipment->Users->find('list', ['limit' => 200]);
            $this->set(compact('expendituresEquipment', 'incomeEquipment', 'users'));
            $this->set('_serialize', ['expendituresEquipment']);
        }

        /**
         * Edit method
         *
         * @param string|null $id Expenditures Equipment id.
         * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
         * @throws \Cake\Network\Exception\NotFoundException When record not found.
         */


        public function egreso($id = null){

              $expendituresEquipment = $this->ExpendituresEquipment->newEntity();
              $ingresos = $this->ExpendituresEquipment->find("all",['contain' => ['IncomeEquipment','Users']]);
              $ingresoEquipo = $this->loadModel('IncomeEquipment')->get($id);
              $tecnicos = $this->loadModel('Users')->find("all")->toArray();

            if ($this->request->is('post')) {
                $expendituresEquipment = $this->ExpendituresEquipment->patchEntity($expendituresEquipment, $this->request->getData());

                if ( empty( $this->request->data["user_id"] )){

                     $this->Flash->error(__('Ha ocurrido un error,  no ingreso usuario recibe'));
                }else{

                    $expendituresEquipment->usuario_recb = $this->request->data["user_id"];
                }

                $expendituresEquipment->fecha_ing=$ingresoEquipo->fecha_ing;
                $expendituresEquipment->usuario_recibe=$ingresoEquipo->usuario_recb;
                $expendituresEquipment->usuario_tralasda=$ingresoEquipo->usuario_traslada;
                $expendituresEquipment->usuario_entrega=$this->request->data["user_id"];
                $expendituresEquipment->income_equipment_id=$ingresoEquipo->id;
                $expendituresEquipment->analisis_falla=$ingresoEquipo->analisis_falla;
                 $this->ExpendituresEquipment->save($expendituresEquipment);

                if ($this->ExpendituresEquipment->save($expendituresEquipment)) {
                    $this->Flash->success(__('Se ha realizado el egreso satisfactoriamente'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Ha ocurrido un error intente nuevamente.'));
            }

            $this->set(compact('expendituresEquipment', 'incomeEquipment', 'users','ingresoEquipo','tecnicos'));
            $this->set('_serialize', ['expendituresEquipment']);


        }

        public function edit($id = null)
        {
            $expendituresEquipment = $this->ExpendituresEquipment->get($id, [
                'contain' => []
            ]);
              $ingresos = $this->ExpendituresEquipment->find("all",['contain' => ['IncomeEquipment','Users']]);
              $ingresoEquipo = $this->loadModel('IncomeEquipment')->get($id);

            if ($this->request->is(['patch', 'post', 'put'])) {
                $expendituresEquipment = $this->ExpendituresEquipment->patchEntity($expendituresEquipment, $this->request->getData());
                if ($this->ExpendituresEquipment->save($expendituresEquipment)) {
                    $this->Flash->success(__('Se ha editado satisfactoriamente el egreso.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Ha ocurrido un error. intenete nuevamente.'));
            }
            $this->set(compact('expendituresEquipment', 'incomeEquipment', 'users','ingresoEquipo','ingresos'));
            $this->set('_serialize', ['expendituresEquipment']);
        }

        /**
         * Delete method
         *
         * @param string|null $id Expenditures Equipment id.
         * @return \Cake\Http\Response|null Redirects to index.
         * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
         */
        public function delete($id = null)
        {
            $ingreso= $this->loadmodel('IncomeEquipment')->get($id);

            $this->request->allowMethod(['post', 'delete']);
            $expendituresEquipment = $this->ExpendituresEquipment->get($id);
            if ($this->ExpendituresEquipment->delete($expendituresEquipment)) {
                if ($ingreso->id) {
                     $this->IncomeEquipment->delete($ingreso);

                }
                $this->Flash->success(__('Se ha eliminado satisfactoriamente el egreso.'));
            } else {
                $this->Flash->error(__('Ha ocurrido un error. intente nuevamente.'));
            }

            return $this->redirect(['action' => 'index']);
        }
    }
