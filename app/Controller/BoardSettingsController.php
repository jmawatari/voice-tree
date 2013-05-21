<?php
App::uses('AppController', 'Controller');
/**
 * BoardSettings Controller
 *
 * @property BoardSetting $BoardSetting
 */
class BoardSettingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BoardSetting->recursive = 0;
		$this->set('boardSettings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BoardSetting->exists($id)) {
			throw new NotFoundException(__('Invalid board setting'));
		}
		$options = array('conditions' => array('BoardSetting.' . $this->BoardSetting->primaryKey => $id));
		$this->set('boardSetting', $this->BoardSetting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BoardSetting->create();
			if ($this->BoardSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The board setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board setting could not be saved. Please, try again.'));
			}
		}
		$clients = $this->BoardSetting->Client->find('list');
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
		if (!$this->BoardSetting->exists($id)) {
			throw new NotFoundException(__('Invalid board setting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BoardSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The board setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board setting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BoardSetting.' . $this->BoardSetting->primaryKey => $id));
			$this->request->data = $this->BoardSetting->find('first', $options);
		}
		$clients = $this->BoardSetting->Client->find('list');
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
		$this->BoardSetting->id = $id;
		if (!$this->BoardSetting->exists()) {
			throw new NotFoundException(__('Invalid board setting'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BoardSetting->delete()) {
			$this->Session->setFlash(__('Board setting deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Board setting was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->BoardSetting->recursive = 0;
		$this->set('boardSettings', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BoardSetting->exists($id)) {
			throw new NotFoundException(__('Invalid board setting'));
		}
		$options = array('conditions' => array('BoardSetting.' . $this->BoardSetting->primaryKey => $id));
		$this->set('boardSetting', $this->BoardSetting->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BoardSetting->create();
			if ($this->BoardSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The board setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board setting could not be saved. Please, try again.'));
			}
		}
		$clients = $this->BoardSetting->Client->find('list');
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
		if (!$this->BoardSetting->exists($id)) {
			throw new NotFoundException(__('Invalid board setting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BoardSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The board setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board setting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BoardSetting.' . $this->BoardSetting->primaryKey => $id));
			$this->request->data = $this->BoardSetting->find('first', $options);
		}
		$clients = $this->BoardSetting->Client->find('list');
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
		$this->BoardSetting->id = $id;
		if (!$this->BoardSetting->exists()) {
			throw new NotFoundException(__('Invalid board setting'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BoardSetting->delete()) {
			$this->Session->setFlash(__('Board setting deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Board setting was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
