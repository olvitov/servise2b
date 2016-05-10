<?php
    class UsersController extends AppController {

        public function beforeFilter(){
          // $this->Auth->allow('index', 'view');
            parent::beforeFilter();
            $this->Auth->allow('add', 'logout');
        }


        public $components = array('Session', 'Flash', 'Paginator');

public function index() {
    $this->set('users', $this->User->find('all'));

}
        public function add() {
            if ($this->request->is('post')) {
                $this->User->create();
                if ($this->User->save($this->request->data)) {
               $this->Flash->add(__('Пользователь добавлен.'));
                    return $this->redirect(array('controller' => 'users'));
                } else {
                    $this->Flash->error(__('Ошибка регистрации.'));
                }

            }


        }
        public function login() {
            if($this->request->is('post')) {
                if($this->Auth->login()) {
                    return $this->redirect($this->Auth->redirectUrl());
                }else{
                   $this->Flash->error('Ошибка авторизации');
                }
            }

        }
        public function logout() {
           return $this->redirect($this->Auth->Logout());
        }

        public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Flash->delit(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

    
public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }


    }

?>