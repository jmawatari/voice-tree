<?php
App::uses('AppController', 'Controller');
/**
 * AdminRoles Controller
 *
 * @property AdminRole $AdminRole
 */
class AdminRolesController extends AppController {
/**
 * Components
 *
 * @var array
 */
//    public $components = array('Auth');

/**
 * 
 */
    public function beforeFilter() {
//        parent::beforeFilter();
        $this->Auth->allow();
    }

    /**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AdminRole->recursive = 0;
		$this->set('adminRoles', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AdminRole->exists($id)) {
			throw new NotFoundException(__('Invalid admin role'));
		}
		$options = array('conditions' => array('AdminRole.' . $this->AdminRole->primaryKey => $id));
		$this->set('adminRole', $this->AdminRole->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AdminRole->create();
			if ($this->AdminRole->save($this->request->data)) {
				$this->Session->setFlash(__('The admin role has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin role could not be saved. Please, try again.'));
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
		if (!$this->AdminRole->exists($id)) {
			throw new NotFoundException(__('Invalid admin role'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AdminRole->save($this->request->data)) {
				$this->Session->setFlash(__('The admin role has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin role could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdminRole.' . $this->AdminRole->primaryKey => $id));
			$this->request->data = $this->AdminRole->find('first', $options);
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
		$this->AdminRole->id = $id;
		if (!$this->AdminRole->exists()) {
			throw new NotFoundException(__('Invalid admin role'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AdminRole->delete()) {
			$this->Session->setFlash(__('Admin role deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Admin role was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AdminRole->recursive = 0;
		$this->set('adminRoles', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AdminRole->exists($id)) {
			throw new NotFoundException(__('Invalid admin role'));
		}
		$options = array('conditions' => array('AdminRole.' . $this->AdminRole->primaryKey => $id));
		$this->set('adminRole', $this->AdminRole->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AdminRole->create();
			if ($this->AdminRole->save($this->request->data)) {
				$this->Session->setFlash(__('The admin role has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin role could not be saved. Please, try again.'));
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
		if (!$this->AdminRole->exists($id)) {
			throw new NotFoundException(__('Invalid admin role'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AdminRole->save($this->request->data)) {
				$this->Session->setFlash(__('The admin role has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin role could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdminRole.' . $this->AdminRole->primaryKey => $id));
			$this->request->data = $this->AdminRole->find('first', $options);
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
		$this->AdminRole->id = $id;
		if (!$this->AdminRole->exists()) {
			throw new NotFoundException(__('Invalid admin role'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AdminRole->delete()) {
			$this->Session->setFlash(__('Admin role deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Admin role was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
