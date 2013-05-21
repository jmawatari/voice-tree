<?php
App::uses('AppController', 'Controller');
/**
 * VotedPoints Controller
 *
 * @property VotedPoint $VotedPoint
 */
class VotedPointsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->VotedPoint->recursive = 0;
		$this->set('votedPoints', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VotedPoint->exists($id)) {
			throw new NotFoundException(__('Invalid voted point'));
		}
		$options = array('conditions' => array('VotedPoint.' . $this->VotedPoint->primaryKey => $id));
		$this->set('votedPoint', $this->VotedPoint->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VotedPoint->create();
			if ($this->VotedPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The voted point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The voted point could not be saved. Please, try again.'));
			}
		}
		$customers = $this->VotedPoint->Customer->find('list');
		$comments = $this->VotedPoint->Comment->find('list');
		$subComments = $this->VotedPoint->SubComment->find('list');
		$this->set(compact('customers', 'comments', 'subComments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->VotedPoint->exists($id)) {
			throw new NotFoundException(__('Invalid voted point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->VotedPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The voted point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The voted point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VotedPoint.' . $this->VotedPoint->primaryKey => $id));
			$this->request->data = $this->VotedPoint->find('first', $options);
		}
		$customers = $this->VotedPoint->Customer->find('list');
		$comments = $this->VotedPoint->Comment->find('list');
		$subComments = $this->VotedPoint->SubComment->find('list');
		$this->set(compact('customers', 'comments', 'subComments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->VotedPoint->id = $id;
		if (!$this->VotedPoint->exists()) {
			throw new NotFoundException(__('Invalid voted point'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VotedPoint->delete()) {
			$this->Session->setFlash(__('Voted point deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Voted point was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->VotedPoint->recursive = 0;
		$this->set('votedPoints', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->VotedPoint->exists($id)) {
			throw new NotFoundException(__('Invalid voted point'));
		}
		$options = array('conditions' => array('VotedPoint.' . $this->VotedPoint->primaryKey => $id));
		$this->set('votedPoint', $this->VotedPoint->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->VotedPoint->create();
			if ($this->VotedPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The voted point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The voted point could not be saved. Please, try again.'));
			}
		}
		$customers = $this->VotedPoint->Customer->find('list');
		$comments = $this->VotedPoint->Comment->find('list');
		$subComments = $this->VotedPoint->SubComment->find('list');
		$this->set(compact('customers', 'comments', 'subComments'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->VotedPoint->exists($id)) {
			throw new NotFoundException(__('Invalid voted point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->VotedPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The voted point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The voted point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VotedPoint.' . $this->VotedPoint->primaryKey => $id));
			$this->request->data = $this->VotedPoint->find('first', $options);
		}
		$customers = $this->VotedPoint->Customer->find('list');
		$comments = $this->VotedPoint->Comment->find('list');
		$subComments = $this->VotedPoint->SubComment->find('list');
		$this->set(compact('customers', 'comments', 'subComments'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->VotedPoint->id = $id;
		if (!$this->VotedPoint->exists()) {
			throw new NotFoundException(__('Invalid voted point'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VotedPoint->delete()) {
			$this->Session->setFlash(__('Voted point deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Voted point was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
