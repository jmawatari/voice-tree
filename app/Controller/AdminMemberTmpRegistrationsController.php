<?php
App::uses('AppController', 'Controller');
/**
 * AdminMemberTmpRegistrations Controller
 *
 * @property AdminMemberTmpRegistration $AdminMemberTmpRegistration
 */
class AdminMemberTmpRegistrationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AdminMemberTmpRegistration->recursive = 0;
		$this->set('adminMemberTmpRegistrations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AdminMemberTmpRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid admin member tmp registration'));
		}
		$options = array('conditions' => array('AdminMemberTmpRegistration.' . $this->AdminMemberTmpRegistration->primaryKey => $id));
		$this->set('adminMemberTmpRegistration', $this->AdminMemberTmpRegistration->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AdminMemberTmpRegistration->create();
			if ($this->AdminMemberTmpRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The admin member tmp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin member tmp registration could not be saved. Please, try again.'));
			}
		}
		$adminMembers = $this->AdminMemberTmpRegistration->AdminMember->find('list');
		$this->set(compact('adminMembers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AdminMemberTmpRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid admin member tmp registration'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AdminMemberTmpRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The admin member tmp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin member tmp registration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdminMemberTmpRegistration.' . $this->AdminMemberTmpRegistration->primaryKey => $id));
			$this->request->data = $this->AdminMemberTmpRegistration->find('first', $options);
		}
		$adminMembers = $this->AdminMemberTmpRegistration->AdminMember->find('list');
		$this->set(compact('adminMembers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AdminMemberTmpRegistration->id = $id;
		if (!$this->AdminMemberTmpRegistration->exists()) {
			throw new NotFoundException(__('Invalid admin member tmp registration'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AdminMemberTmpRegistration->delete()) {
			$this->Session->setFlash(__('Admin member tmp registration deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Admin member tmp registration was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AdminMemberTmpRegistration->recursive = 0;
		$this->set('adminMemberTmpRegistrations', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AdminMemberTmpRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid admin member tmp registration'));
		}
		$options = array('conditions' => array('AdminMemberTmpRegistration.' . $this->AdminMemberTmpRegistration->primaryKey => $id));
		$this->set('adminMemberTmpRegistration', $this->AdminMemberTmpRegistration->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AdminMemberTmpRegistration->create();
			if ($this->AdminMemberTmpRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The admin member tmp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin member tmp registration could not be saved. Please, try again.'));
			}
		}
		$adminMembers = $this->AdminMemberTmpRegistration->AdminMember->find('list');
		$this->set(compact('adminMembers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->AdminMemberTmpRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid admin member tmp registration'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AdminMemberTmpRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The admin member tmp registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin member tmp registration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdminMemberTmpRegistration.' . $this->AdminMemberTmpRegistration->primaryKey => $id));
			$this->request->data = $this->AdminMemberTmpRegistration->find('first', $options);
		}
		$adminMembers = $this->AdminMemberTmpRegistration->AdminMember->find('list');
		$this->set(compact('adminMembers'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->AdminMemberTmpRegistration->id = $id;
		if (!$this->AdminMemberTmpRegistration->exists()) {
			throw new NotFoundException(__('Invalid admin member tmp registration'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AdminMemberTmpRegistration->delete()) {
			$this->Session->setFlash(__('Admin member tmp registration deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Admin member tmp registration was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
