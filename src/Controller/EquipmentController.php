    <?php
    namespace App\Controller;

    use App\Controller\AppController;
    use App\Model\Validation\ContactValidator;


    /**
     * Equipment Controller
     *
     * @property \App\Model\Table\EquipmentTable $Equipment
     *
     * @method \App\Model\Entity\Equipment[] paginate($object = null, array $settings = [])
     */
    class EquipmentController extends AppController
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
            $equipment = $this->Equipment->find("all");


            $this->set(compact('equipment'));
            $this->set('_serialize', ['equipment']);
        }

        /**
         * View method
         *
         * @param string|null $id Equipment id.
         * @return \Cake\Http\Response|void
         * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
         */
        public function view($id = null)
        {
                $equipment = $this->Equipment->get($id);

                 $this->viewBuilder()->options(['pdfConfig' => ['orientation' => 'portrait','filename' => 'Equipo_' .'.pdf']]);

            $this->set('equipment', $equipment);
            $this->set('_serialize', ['equipment']);
        }

        /**
         * Add method
         *
         * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
         */
        public function add()
        {
            $equipment = $this->Equipment->newEntity();
            if ($this->request->is('post')) {
                $equipment = $this->Equipment->patchEntity($equipment, $this->request->getData());
                if ($this->Equipment->save($equipment)) {
                    $this->Flash->success(__('Se ha creado con exito el equipo.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Ha ocurrido un error,intente nuevamente llenar los campos'));
            }
            $this->set(compact('equipment'));
            $this->set('_serialize', ['equipment']);
        }

        /**
         * Edit method
         *
         * @param string|null $id Equipment id.
         * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
         * @throws \Cake\Network\Exception\NotFoundException When record not found.
         */
        public function edit($id = null)
        {

            $courseflag2= $this->loadmodel('Users')->get($id, [
                'contain' => []
            ]);

            $equipment = $this->Equipment->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $equipment = $this->Equipment->patchEntity($equipment, $this->request->getData());
                if ($this->Equipment->save($equipment)) {
                    $this->Flash->success(__('Se ha editado con exito el equipo.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Ha ocurrido un error al editar los campos, intente nuevamente.'));
            }
            $this->set(compact('equipment'));
            $this->set('_serialize', ['equipment']);
        }

        /**
         * Delete method
         *
         * @param string|null $id Equipment id.
         * @return \Cake\Http\Response|null Redirects to index.
         * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
         */
        public function delete($id = null)
        {
            $this->request->allowMethod(['post', 'delete']);
            $equipment = $this->Equipment->get($id);
            if ($this->Equipment->delete($equipment)) {
                $this->Flash->success(__('Se ha eliminado con exito el equipo.'));
            } else {
                $this->Flash->error(__('Ha ocurrido un error al elimiar el equipo. por favor intente nuevamente.'));
            }

            return $this->redirect(['action' => 'index']);
        }
    }
