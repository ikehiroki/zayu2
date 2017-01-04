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
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Principle->recursive = 0;
		$this->set('principles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Principle->exists($id)) {
			throw new NotFoundException(__('Invalid principle'));
		}
		$options = array('conditions' => array('Principle.' . $this->Principle->primaryKey => $id));
		$this->set('principle', $this->Principle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Principle->create();
			if ($this->Principle->save($this->request->data)) {
				$this->Flash->success(__('The principle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The principle could not be saved. Please, try again.'));
			}
		}
		$users = $this->Principle->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Principle->exists($id)) {
			throw new NotFoundException(__('Invalid principle'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Principle->save($this->request->data)) {
				$this->Flash->success(__('The principle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The principle could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Principle.' . $this->Principle->primaryKey => $id));
			$this->request->data = $this->Principle->find('first', $options);
		}
		$users = $this->Principle->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Principle->id = $id;
		if (!$this->Principle->exists()) {
			throw new NotFoundException(__('Invalid principle'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Principle->delete()) {
			$this->Flash->success(__('The principle has been deleted.'));
		} else {
			$this->Flash->error(__('The principle could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
