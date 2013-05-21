<?php
App::uses('AppController', 'Controller');
/**
 * AdminMembers Controller
 *
 * @property AdminMember $AdminMember
 */
class AdminMembersController extends AppController {

/**
 * login method
 */
    public function login() {
        if ($this->request->is('post')){
            if ($this->Auth->login()){
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('ユーザ名もしくはパスワードが正しくありません。'), 'default', array(), 'auth');
            }
        }
    }
    
/**
 * logout method
 */
    public function logout() {
        $this->redirect($this->Auth->logout());
    }
    
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AdminMember->recursive = 0;
		$this->set('adminMembers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AdminMember->exists($id)) {
			throw new NotFoundException(__('Invalid admin member'));
		}
		$options = array('conditions' => array('AdminMember.' . $this->AdminMember->primaryKey => $id));
		$this->set('adminMember', $this->AdminMember->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AdminMember->create();
			if ($this->AdminMember->save($this->request->data)) {
				$this->Session->setFlash(__('The admin member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin member could not be saved. Please, try again.'));
			}
		}
		$adminRoles = $this->AdminMember->AdminRole->find('list');
		$this->set(compact('adminRoles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AdminMember->exists($id)) {
			throw new NotFoundException(__('Invalid admin member'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AdminMember->save($this->request->data)) {
				$this->Session->setFlash(__('The admin member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin member could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdminMember.' . $this->AdminMember->primaryKey => $id));
			$this->request->data = $this->AdminMember->find('first', $options);
		}
		$adminRoles = $this->AdminMember->AdminRole->find('list');
		$this->set(compact('adminRoles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AdminMember->id = $id;
		if (!$this->AdminMember->exists()) {
			throw new NotFoundException(__('Invalid admin member'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AdminMember->delete()) {
			$this->Session->setFlash(__('Admin member deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Admin member was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AdminMember->recursive = 0;
		$this->set('adminMembers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AdminMember->exists($id)) {
			throw new NotFoundException(__('Invalid admin member'));
		}
		$options = array('conditions' => array('AdminMember.' . $this->AdminMember->primaryKey => $id));
		$this->set('adminMember', $this->AdminMember->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AdminMember->create();
			if ($this->AdminMember->save($this->request->data)) {
				$this->Session->setFlash(__('The admin member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin member could not be saved. Please, try again.'));
			}
		}
		$adminRoles = $this->AdminMember->AdminRole->find('list');
		$this->set(compact('adminRoles'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->AdminMember->exists($id)) {
			throw new NotFoundException(__('Invalid admin member'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AdminMember->save($this->request->data)) {
				$this->Session->setFlash(__('The admin member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin member could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdminMember.' . $this->AdminMember->primaryKey => $id));
			$this->request->data = $this->AdminMember->find('first', $options);
		}
		$adminRoles = $this->AdminMember->AdminRole->find('list');
		$this->set(compact('adminRoles'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->AdminMember->id = $id;
		if (!$this->AdminMember->exists()) {
			throw new NotFoundException(__('Invalid admin member'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AdminMember->delete()) {
			$this->Session->setFlash(__('Admin member deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Admin member was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
