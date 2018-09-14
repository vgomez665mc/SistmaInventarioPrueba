    <?php
    namespace App\Controller;

    use App\Controller\AppController;
    use App\Model\Validation\ContactValidator;


    /**
     * Cpu Controller
     *
     * @property \App\Model\Table\CpuTable $Cpu
     *
     * @method \App\Model\Entity\Cpu[] paginate($object = null, array $settings = [])
     */
    class CpuController extends AppController
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
            $cpu = $this->Cpu->find("all");

            $this->set(compact('cpu'));
            $this->set('_serialize', ['cpu']);
        }

        /**
         * View method
         *
         * @param string|null $id Cpu id.
         * @return \Cake\Http\Response|void
         * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
         */
        public function view($id = null)
        {
            
            $cpu = $this->Cpu->get($id);

                 $this->viewBuilder()->options(['pdfConfig' => ['orientation' => 'portrait','filename' => 'Cpu' .'.pdf']]);

            $this->set('cpu', $cpu);
            $this->set('_serialize', ['cpu']);
        }

        /**
         * Add method
         *
         * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
         */
        public function add()
        {
            $cpu = $this->Cpu->newEntity();
            if ($this->request->is('post')) {
                $cpu = $this->Cpu->patchEntity($cpu, $this->request->getData());
                if ($this->Cpu->save($cpu)) {
                    $this->Flash->success(__('Se ha creado con exito el Cpu.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Ha ocurrido un error.Por favor intente de nuevo.'));
            }
            $this->set(compact('cpu'));
            $this->set('_serialize', ['cpu']);
        }

        /**
         * Edit method
         *
         * @param string|null $id Cpu id.
         * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
         * @throws \Cake\Network\Exception\NotFoundException When record not found.
         */
        public function edit($id = null)
        {
            $cpu = $this->Cpu->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $cpu = $this->Cpu->patchEntity($cpu, $this->request->getData());
                if ($this->Cpu->save($cpu)) {
                    $this->Flash->success(__('Se ha editado con exito el Cpu.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Ha ocurrido un error al editar un Cpu. Por favor intente nuevamente.'));
            }
            $this->set(compact('cpu'));
            $this->set('_serialize', ['cpu']);
        }

        /**
         * Delete method
         *
         * @param string|null $id Cpu id.
         * @return \Cake\Http\Response|null Redirects to index.
         * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
         */
        public function delete($id = null)
        {
            $this->request->allowMethod(['post', 'delete']);
            $cpu = $this->Cpu->get($id);
            if ($this->Cpu->delete($cpu)) {
                $this->Flash->success(__('Se ha eliminado con exito el Cpu.'));
            } else {
                $this->Flash->error(__('Ha ocurrido un error al eliminar el Cpu. Por favor intente nuevamente.'));
            }

            return $this->redirect(['action' => 'index']);
        }
    }
