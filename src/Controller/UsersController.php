<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * *
     * login
     * @return type
     */
    public function login()
    {
        $this->viewBuilder()->layout('admin');
        if($this->request->is('post')){

            if(!filter_var($this->request->data['username'], FILTER_VALIDATE_EMAIL)===false){
                $this->Auth->config('authenticate', [
                    'Form'=>['fields'=>['username'=>'email', 'password'=>'password']]
                ]);
                $this->Auth->constructAuthenticate();
                $this->request->data['email']=$this->request->data['username'];
                unset($this->request->data['username']);
            }
          //  pr($this->request->data);

            $user=$this->Auth->identify();
            if($user){

                $this->Auth->setUser($user);
                $this->Flash->success(__('Wel Come-'.ucfirst($user['name'])));
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

   

    /**
     * *
     * LogOut
     * @return type
     */
    public function logout()
    {
        $this->Flash->success(__('You Successfully Log Out'));
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users=$this->paginate($this->Users);
        $this->set('title', 'Users');
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id=null)
    {
        $user=$this->Users->get($id, [
            'contain'=>[]
        ]);
        $this->set('title', 'View Users');
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user=$this->Users->newEntity();
        if($this->request->is('post')){
            $user=$this->Users->patchEntity($user, $this->request->getData());
            if($this->Users->save($user)){
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id=null)
    {
        $user=$this->Users->get($id, [
            'contain'=>[]
        ]);
        if($this->request->is(['patch', 'post', 'put'])){
            $user=$this->Users->patchEntity($user, $this->request->getData());
            if($this->Users->save($user)){
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action'=>'index']);
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
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id=null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user=$this->Users->get($id);
        if($this->Users->delete($user)){
            $this->Flash->success(__('The user has been deleted.'));
        }else{
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action'=>'index']);
    }

}