<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Validation\ContactValidator;


/**
 * Officials Controller
 *
 * @property \App\Model\Table\OfficialsTable $Officials
 *
 * @method \App\Model\Entity\Official[] paginate($object = null, array $settings = [])
 */
class OfficialsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $officials = $this->Officials->find("all");


        $this->set(compact('officials'));
        $this->set('_serialize', ['officials']);
    }

    /**
     * View method
     *
     * @param string|null $id Official id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
       

     $official = $this->Officials->get($id);

     $this->viewBuilder()->options(['pdfConfig' => ['orientation' => 'portrait','filename' => 'Funcionario' . $official->cedula. '.pdf']]);

        $this->set('official', $official);
        $this->set('_serialize', ['official']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $official = $this->Officials->newEntity();
        if ($this->request->is('post')) {
            $official = $this->Officials->patchEntity($official, $this->request->getData());
            if ($this->Officials->save($official)) {
                $this->Flash->success(__('Se ha creado con exito el funcionario.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ha ocurrido un error. Por favor intente nuevamente.'));
        }
        $this->set(compact('official'));
        $this->set('_serialize', ['official']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Official id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $official = $this->Officials->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $official = $this->Officials->patchEntity($official, $this->request->getData());
            if ($this->Officials->save($official)) {
                $this->Flash->success(__('Se ha editado con exito el funcionario.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ha ocurrido un error. Por favor intente nuevamente.'));
        }
        $this->set(compact('official'));
        $this->set('_serialize', ['official']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Official id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $official = $this->Officials->get($id);
        if ($this->Officials->delete($official)) {
            $this->Flash->success(__('Se ha eliminado con exito el funcionario.'));
        } else {
            $this->Flash->error(__('Ha ocurrido un error, Por favor intente nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
