<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inventories Controller
 *
 * @property \App\Model\Table\InventoriesTable $Inventories
 *
 * @method \App\Model\Entity\Inventory[] paginate($object = null, array $settings = [])
 */
class InventoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cpu', 'Equipment', 'Users']
        ];
        $inventories = $this->paginate($this->Inventories);

        $this->set(compact('inventories'));
        $this->set('_serialize', ['inventories']);
    }

    /**
     * View method
     *
     * @param string|null $id Inventory id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inventory = $this->Inventories->get($id, [
            'contain' => ['Cpu', 'Equipment', 'Users']
        ]);

        $this->set('inventory', $inventory);
        $this->set('_serialize', ['inventory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inventory = $this->Inventories->newEntity();
        if ($this->request->is('post')) {
            $inventory = $this->Inventories->patchEntity($inventory, $this->request->getData());
            if ($this->Inventories->save($inventory)) {
                $this->Flash->success(__('The inventory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventory could not be saved. Please, try again.'));
        }
        $cpu = $this->Inventories->Cpu->find('list', ['limit' => 200]);
        $equipment = $this->Inventories->Equipment->find('list', ['limit' => 200]);
        $users = $this->Inventories->Users->find('list', ['limit' => 200]);
        $this->set(compact('inventory', 'cpu', 'equipment', 'users'));
        $this->set('_serialize', ['inventory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inventory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inventory = $this->Inventories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inventory = $this->Inventories->patchEntity($inventory, $this->request->getData());
            if ($this->Inventories->save($inventory)) {
                $this->Flash->success(__('The inventory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventory could not be saved. Please, try again.'));
        }
        $cpu = $this->Inventories->Cpu->find('list', ['limit' => 200]);
        $equipment = $this->Inventories->Equipment->find('list', ['limit' => 200]);
        $users = $this->Inventories->Users->find('list', ['limit' => 200]);
        $this->set(compact('inventory', 'cpu', 'equipment', 'users'));
        $this->set('_serialize', ['inventory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inventory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inventory = $this->Inventories->get($id);
        if ($this->Inventories->delete($inventory)) {
            $this->Flash->success(__('The inventory has been deleted.'));
        } else {
            $this->Flash->error(__('The inventory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
