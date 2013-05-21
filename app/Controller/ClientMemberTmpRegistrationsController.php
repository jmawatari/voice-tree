<?php
App::uses('AppController', 'Controller');
/**
 * ClientMemberTmpRegistrations Controller
 *
 * @property ClientMemberTmpRegistration $ClientMemberTmpRegistration
 */
class ClientMemberTmpRegistrationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientMemberTmpRegistration->recursive = 0;
		$this->set('clientMemberTmpRegistrations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClientMemberTmpRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid client member tmp registration'));
		}
		$options = array('conditions' => array('ClientMemberTmpRegistration.' . $this->ClientMemberTmpRegistration->primaryKey => $id));
		$this->set('clientMemberTmpRegistration', $this->ClientMemberTmpRegistration->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientMemberTmpRegistration->create();
			if ($this->ClientMemberTmpRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The client member tmp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client member tmp registration could not be saved. Please, try again.'));
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
		if (!$this->ClientMemberTmpRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid client member tmp registration'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientMemberTmpRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The client member tmp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client member tmp registration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClientMemberTmpRegistration.' . $this->ClientMemberTmpRegistration->primaryKey => $id));
			$this->request->data = $this->ClientMemberTmpRegistration->find('first', $options);
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
		$this->ClientMemberTmpRegistration->id = $id;
		if (!$this->ClientMemberTmpRegistration->exists()) {
			throw new NotFoundException(__('Invalid client member tmp registration'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ClientMemberTmpRegistration->delete()) {
			$this->Session->setFlash(__('Client member tmp registration deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Client member tmp registration was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ClientMemberTmpRegistration->recursive = 0;
		$this->set('clientMemberTmpRegistrations', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ClientMemberTmpRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid client member tmp registration'));
		}
		$options = array('conditions' => array('ClientMemberTmpRegistration.' . $this->ClientMemberTmpRegistration->primaryKey => $id));
		$this->set('clientMemberTmpRegistration', $this->ClientMemberTmpRegistration->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ClientMemberTmpRegistration->create();
			if ($this->ClientMemberTmpRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The client member tmp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client member tmp registration could not be saved. Please, try again.'));
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
		if (!$this->ClientMemberTmpRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid client member tmp registration'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientMemberTmpRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The client member tmp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client member tmp registration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClientMemberTmpRegistration.' . $this->ClientMemberTmpRegistration->primaryKey => $id));
			$this->request->data = $this->ClientMemberTmpRegistration->find('first', $options);
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
		$this->ClientMemberTmpRegistration->id = $id;
		if (!$this->ClientMemberTmpRegistration->exists()) {
			throw new NotFoundException(__('Invalid client member tmp registration'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ClientMemberTmpRegistration->delete()) {
			$this->Session->setFlash(__('Client member tmp registration deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Client member tmp registration was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
