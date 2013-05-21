<?php
App::uses('AppController', 'Controller');
/**
 * SubComments Controller
 *
 * @property SubComment $SubComment
 */
class SubCommentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SubComment->recursive = 0;
		$this->set('subComments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubComment->exists($id)) {
			throw new NotFoundException(__('Invalid sub comment'));
		}
		$options = array('conditions' => array('SubComment.' . $this->SubComment->primaryKey => $id));
		$this->set('subComment', $this->SubComment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubComment->create();
			if ($this->SubComment->save($this->request->data)) {
				$this->Session->setFlash(__('The sub comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub comment could not be saved. Please, try again.'));
			}
		}
		$subComments = $this->SubComment->SubComment->find('list');
		$customers = $this->SubComment->Customer->find('list');
		$comments = $this->SubComment->Comment->find('list');
		$this->set(compact('subComments', 'customers', 'comments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SubComment->exists($id)) {
			throw new NotFoundException(__('Invalid sub comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SubComment->save($this->request->data)) {
				$this->Session->setFlash(__('The sub comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub comment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubComment.' . $this->SubComment->primaryKey => $id));
			$this->request->data = $this->SubComment->find('first', $options);
		}
		$subComments = $this->SubComment->SubComment->find('list');
		$customers = $this->SubComment->Customer->find('list');
		$comments = $this->SubComment->Comment->find('list');
		$this->set(compact('subComments', 'customers', 'comments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SubComment->id = $id;
		if (!$this->SubComment->exists()) {
			throw new NotFoundException(__('Invalid sub comment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SubComment->delete()) {
			$this->Session->setFlash(__('Sub comment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sub comment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SubComment->recursive = 0;
		$this->set('subComments', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->SubComment->exists($id)) {
			throw new NotFoundException(__('Invalid sub comment'));
		}
		$options = array('conditions' => array('SubComment.' . $this->SubComment->primaryKey => $id));
		$this->set('subComment', $this->SubComment->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SubComment->create();
			if ($this->SubComment->save($this->request->data)) {
				$this->Session->setFlash(__('The sub comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub comment could not be saved. Please, try again.'));
			}
		}
		$subComments = $this->SubComment->SubComment->find('list');
		$customers = $this->SubComment->Customer->find('list');
		$comments = $this->SubComment->Comment->find('list');
		$this->set(compact('subComments', 'customers', 'comments'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->SubComment->exists($id)) {
			throw new NotFoundException(__('Invalid sub comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SubComment->save($this->request->data)) {
				$this->Session->setFlash(__('The sub comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub comment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubComment.' . $this->SubComment->primaryKey => $id));
			$this->request->data = $this->SubComment->find('first', $options);
		}
		$subComments = $this->SubComment->SubComment->find('list');
		$customers = $this->SubComment->Customer->find('list');
		$comments = $this->SubComment->Comment->find('list');
		$this->set(compact('subComments', 'customers', 'comments'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->SubComment->id = $id;
		if (!$this->SubComment->exists()) {
			throw new NotFoundException(__('Invalid sub comment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SubComment->delete()) {
			$this->Session->setFlash(__('Sub comment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sub comment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
