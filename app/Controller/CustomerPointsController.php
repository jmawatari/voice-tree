<?php
App::uses('AppController', 'Controller');
/**
 * CustomerPoints Controller
 *
 * @property CustomerPoint $CustomerPoint
 */
class CustomerPointsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerPoint->recursive = 0;
		$this->set('customerPoints', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CustomerPoint->exists($id)) {
			throw new NotFoundException(__('Invalid customer point'));
		}
		$options = array('conditions' => array('CustomerPoint.' . $this->CustomerPoint->primaryKey => $id));
		$this->set('customerPoint', $this->CustomerPoint->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerPoint->create();
			if ($this->CustomerPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The customer point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer point could not be saved. Please, try again.'));
			}
		}
		$customers = $this->CustomerPoint->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CustomerPoint->exists($id)) {
			throw new NotFoundException(__('Invalid customer point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The customer point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CustomerPoint.' . $this->CustomerPoint->primaryKey => $id));
			$this->request->data = $this->CustomerPoint->find('first', $options);
		}
		$customers = $this->CustomerPoint->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CustomerPoint->id = $id;
		if (!$this->CustomerPoint->exists()) {
			throw new NotFoundException(__('Invalid customer point'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerPoint->delete()) {
			$this->Session->setFlash(__('Customer point deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer point was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CustomerPoint->recursive = 0;
		$this->set('customerPoints', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CustomerPoint->exists($id)) {
			throw new NotFoundException(__('Invalid customer point'));
		}
		$options = array('conditions' => array('CustomerPoint.' . $this->CustomerPoint->primaryKey => $id));
		$this->set('customerPoint', $this->CustomerPoint->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CustomerPoint->create();
			if ($this->CustomerPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The customer point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer point could not be saved. Please, try again.'));
			}
		}
		$customers = $this->CustomerPoint->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CustomerPoint->exists($id)) {
			throw new NotFoundException(__('Invalid customer point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The customer point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CustomerPoint.' . $this->CustomerPoint->primaryKey => $id));
			$this->request->data = $this->CustomerPoint->find('first', $options);
		}
		$customers = $this->CustomerPoint->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CustomerPoint->id = $id;
		if (!$this->CustomerPoint->exists()) {
			throw new NotFoundException(__('Invalid customer point'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerPoint->delete()) {
			$this->Session->setFlash(__('Customer point deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer point was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
