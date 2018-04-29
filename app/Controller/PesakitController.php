<?php
App::uses('AppController', 'Controller');
/**
 * Pesakits Controller
 *
 * @property Pesakit $Pesakit
 * @property PaginatorComponent $Paginator
 */
class PesakitController extends AppController {

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
		$this->Pesakit->recursive = 0;
		$this->set('pesakits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pesakit->exists($id)) {
			throw new NotFoundException(__('Invalid pesakit'));
		}
		$options = array('conditions' => array('Pesakit.' . $this->Pesakit->primaryKey => $id));
		$this->set('pesakit', $this->Pesakit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pesakit->create();
			if ($this->Pesakit->save($this->request->data)) {
				$this->Flash->success(__('The pesakit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pesakit could not be saved. Please, try again.'));
			}
		}
		$genders = $this->Pesakit->Gender->find('list');
		$races = $this->Pesakit->Race->find('list');
		$this->set(compact('genders', 'races'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pesakit->exists($id)) {
			throw new NotFoundException(__('Invalid pesakit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pesakit->save($this->request->data)) {
				$this->Flash->success(__('The pesakit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pesakit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pesakit.' . $this->Pesakit->primaryKey => $id));
			$this->request->data = $this->Pesakit->find('first', $options);
		}
		$genders = $this->Pesakit->Gender->find('list');
		$races = $this->Pesakit->Race->find('list');
		$this->set(compact('genders', 'races'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pesakit->id = $id;
		if (!$this->Pesakit->exists()) {
			throw new NotFoundException(__('Invalid pesakit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pesakit->delete()) {
			$this->Flash->success(__('The pesakit has been deleted.'));
		} else {
			$this->Flash->error(__('The pesakit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
