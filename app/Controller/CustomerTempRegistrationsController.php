<?php
App::uses('AppController', 'Controller');
/**
 * CustomerTempRegistrations Controller
 *
 * @property CustomerTempRegistration $CustomerTempRegistration
 */
class CustomerTempRegistrationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerTempRegistration->recursive = 0;
		$this->set('customerTempRegistrations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CustomerTempRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid customer temp registration'));
		}
		$options = array('conditions' => array('CustomerTempRegistration.' . $this->CustomerTempRegistration->primaryKey => $id));
		$this->set('customerTempRegistration', $this->CustomerTempRegistration->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerTempRegistration->create();
			if ($this->CustomerTempRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The customer temp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer temp registration could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CustomerTempRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid customer temp registration'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerTempRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The customer temp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer temp registration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CustomerTempRegistration.' . $this->CustomerTempRegistration->primaryKey => $id));
			$this->request->data = $this->CustomerTempRegistration->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CustomerTempRegistration->id = $id;
		if (!$this->CustomerTempRegistration->exists()) {
			throw new NotFoundException(__('Invalid customer temp registration'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerTempRegistration->delete()) {
			$this->Session->setFlash(__('Customer temp registration deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer temp registration was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CustomerTempRegistration->recursive = 0;
		$this->set('customerTempRegistrations', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CustomerTempRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid customer temp registration'));
		}
		$options = array('conditions' => array('CustomerTempRegistration.' . $this->CustomerTempRegistration->primaryKey => $id));
		$this->set('customerTempRegistration', $this->CustomerTempRegistration->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CustomerTempRegistration->create();
			if ($this->CustomerTempRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The customer temp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer temp registration could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CustomerTempRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid customer temp registration'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerTempRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The customer temp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer temp registration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CustomerTempRegistration.' . $this->CustomerTempRegistration->primaryKey => $id));
			$this->request->data = $this->CustomerTempRegistration->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CustomerTempRegistration->id = $id;
		if (!$this->CustomerTempRegistration->exists()) {
			throw new NotFoundException(__('Invalid customer temp registration'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerTempRegistration->delete()) {
			$this->Session->setFlash(__('Customer temp registration deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer temp registration was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
