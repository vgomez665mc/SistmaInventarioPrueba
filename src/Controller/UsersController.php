<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Validation\ContactValidator;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

public function initialize()
{
    parent::initialize();

    $this->loadComponent('Flash');

    // load the Captcha component and set its parameter
    $this->loadComponent('CakeCaptcha.Captcha', [
        'captchaConfig' => 'ContactCaptcha'
    ]);
}

 public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);//indica todos las acciones que el usuario pueda hacer aunque no tenga los permisos
    }

    public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role']== 'tecnico'){
            if(in_array($this->request->action,['home','logout','login'])){
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

    public function login()
    {
        if($this->request->is('post'))
        {
            $validator = new ContactValidator();
            $errors = $validator->errors($this->request->data());
            unset($this->request->data['CaptchaCode']);

            $user = $this->Auth->identify();
            if($user && empty($errors))
            {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else
            {
                $this->Flash->error('Datos son invalidos, por favor intente nuevamente', ['key' => 'auth']);
                $this->set('errors', $errors);

            }
        }

        if ($this->Auth->user() && empty($errors))
        {
            return $this->redirect(['controller' => 'Users', 'action' => 'home']);
        }
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }


    public function home()
    {
        $this->render();
    }
    public function index()
    {
       $users = $this->Users->find("all");

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
    $user = $this->Users->get($id);

     $this->viewBuilder()->options(['pdfConfig' => ['orientation' => 'portrait','filename' => 'Tecnico_' . $user->cedula. '.pdf']]);



        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido creado satisfactoriamente.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Ha ocurrido un error intente nuevamente.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method

   *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }

        $this->set(compact('user'));
       $this->set('_serialize', ['user']);
    }


       


    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('El usuario'." ". $user->nombre." ".$user->apellido." ".'ha sido eliminado'));
        } else {
            $this->Flash->error(__('ha ocurrido un error intente nuevamente'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
