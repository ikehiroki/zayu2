<?php

App::uses('AppController', 'Controller');

/**
 * Principles Controller
 *
 * @property Principle $Principle
 * @property PaginatorComponent $Paginator
 */
class PrinciplesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Principle->recursive = 0;
        $this->set('principles', $this->Paginator->paginate());

        $id = $this->Auth->user('id');
        $options = array('conditions' => array('User.' . $this->Principle->User->primaryKey => $id));
        $user = $this->Principle->User->find('first', $options);
        $this->set(compact('user'));
    }

}
