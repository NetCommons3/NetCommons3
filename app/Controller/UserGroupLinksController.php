<?php
App::uses('AppController', 'Controller');
/**
 * UserGroupLinks Controller
 *
 * @property UserGroupLink $UserGroupLink
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class UserGroupLinksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserGroupLink->recursive = 0;
		$this->set('userGroupLinks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserGroupLink->exists($id)) {
			throw new NotFoundException(__('Invalid user group link'));
		}
		$options = array('conditions' => array('UserGroupLink.' . $this->UserGroupLink->primaryKey => $id));
		$this->set('userGroupLink', $this->UserGroupLink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserGroupLink->create();
			if ($this->UserGroupLink->save($this->request->data)) {
				$this->Session->setFlash(__('The user group link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user group link could not be saved. Please, try again.'));
			}
		}
		$userGroups = $this->UserGroupLink->UserGroup->find('list');
		$users = $this->UserGroupLink->User->find('list');
		$this->set(compact('userGroups', 'users'));
	}

/**
 * edit method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserGroupLink->exists($id)) {
			throw new NotFoundException(__('Invalid user group link'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserGroupLink->save($this->request->data)) {
				$this->Session->setFlash(__('The user group link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user group link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserGroupLink.' . $this->UserGroupLink->primaryKey => $id));
			$this->request->data = $this->UserGroupLink->find('first', $options);
		}
		$userGroups = $this->UserGroupLink->UserGroup->find('list');
		$users = $this->UserGroupLink->User->find('list');
		$this->set(compact('userGroups', 'users'));
	}

/**
 * delete method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function delete($id = null) {
		$this->UserGroupLink->id = $id;
		if (!$this->UserGroupLink->exists()) {
			throw new NotFoundException(__('Invalid user group link'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserGroupLink->delete()) {
			$this->Session->setFlash(__('The user group link has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user group link could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
