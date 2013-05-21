<?php
App::uses('AppController', 'Controller');
/**
 * ClientMembers Controller
 *
 * @property ClientMember $ClientMember
 */
class ClientMembersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientMember->recursive = 0;
		$this->set('clientMembers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClientMember->exists($id)) {
			throw new NotFoundException(__('Invalid client member'));
		}
		$options = array('conditions' => array('ClientMember.' . $this->ClientMember->primaryKey => $id));
		$this->set('clientMember', $this->ClientMember->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientMember->create();
			if ($this->ClientMember->save($this->request->data)) {
				$this->Session->setFlash(__('The client member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client member could not be saved. Please, try again.'));
			}
		}
		$clients = $this->ClientMember->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ClientMember->exists($id)) {
			throw new NotFoundException(__('Invalid client member'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientMember->save($this->request->data)) {
				$this->Session->setFlash(__('The client member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client member could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClientMember.' . $this->ClientMember->primaryKey => $id));
			$this->request->data = $this->ClientMember->find('first', $options);
		}
		$clients = $this->ClientMember->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ClientMember->id = $id;
		if (!$this->ClientMember->exists()) {
			throw new NotFoundException(__('Invalid client member'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ClientMember->delete()) {
			$this->Session->setFlash(__('Client member deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Client member was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ClientMember->recursive = 0;
		$this->set('clientMembers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ClientMember->exists($id)) {
			throw new NotFoundException(__('Invalid client member'));
		}
		$options = array('conditions' => array('ClientMember.' . $this->ClientMember->primaryKey => $id));
		$this->set('clientMember', $this->ClientMember->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ClientMember->create();
			if ($this->ClientMember->save($this->request->data)) {
				$this->Session->setFlash(__('The client member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client member could not be saved. Please, try again.'));
			}
		}
		$clients = $this->ClientMember->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ClientMember->exists($id)) {
			throw new NotFoundException(__('Invalid client member'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientMember->save($this->request->data)) {
				$this->Session->setFlash(__('The client member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client member could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClientMember.' . $this->ClientMember->primaryKey => $id));
			$this->request->data = $this->ClientMember->find('first', $options);
		}
		$clients = $this->ClientMember->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ClientMember->id = $id;
		if (!$this->ClientMember->exists()) {
			throw new NotFoundException(__('Invalid client member'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ClientMember->delete()) {
			$this->Session->setFlash(__('Client member deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Client member was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
