<?php
App::uses('AppController', 'Controller');
/**
 * Records Controller
 *
 * @property Record $Record
 * @property PaginatorComponent $Paginator
 */
class RecordsController extends AppController {

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
		$this->Record->recursive = 0;
		$this->set('records', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Record->exists($id)) {
			throw new NotFoundException(__('Invalid record'));
		}
		$options = array('conditions' => array('Record.' . $this->Record->primaryKey => $id));
		$this->set('record', $this->Record->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Record->create();
			if ($this->Record->save($this->request->data)) {
				$this->Flash->success(__('The record has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The record could not be saved. Please, try again.'));
			}
		}
		$tests = $this->Record->Test->find('list');
		$pesakits = $this->Record->Pesakit->find('list');
		$users = $this->Record->User->find('list');
		$this->set(compact('tests', 'pesakits', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Record->exists($id)) {
			throw new NotFoundException(__('Invalid record'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Record->save($this->request->data)) {
				$this->Flash->success(__('The record has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The record could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Record.' . $this->Record->primaryKey => $id));
			$this->request->data = $this->Record->find('first', $options);
		}
		$tests = $this->Record->Test->find('list');
		$pesakits = $this->Record->Pesakit->find('list');
		$users = $this->Record->User->find('list');
		$this->set(compact('tests', 'pesakits', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Record->id = $id;
		if (!$this->Record->exists()) {
			throw new NotFoundException(__('Invalid record'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Record->delete()) {
			$this->Flash->success(__('The record has been deleted.'));
		} else {
			$this->Flash->error(__('The record could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
