<?php
App::uses('AppController', 'Controller');
/**
 * UserItemLinks Controller
 *
 * @property UserItemLink $UserItemLink
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class UserItemLinksController extends AppController {

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
		$this->UserItemLink->recursive = 0;
		$this->set('userItemLinks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserItemLink->exists($id)) {
			throw new NotFoundException(__('Invalid user item link'));
		}
		$options = array('conditions' => array('UserItemLink.' . $this->UserItemLink->primaryKey => $id));
		$this->set('userItemLink', $this->UserItemLink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserItemLink->create();
			if ($this->UserItemLink->save($this->request->data)) {
				$this->Session->setFlash(__('The user item link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user item link could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserItemLink->User->find('list');
		$userItems = $this->UserItemLink->UserItem->find('list');
		$this->set(compact('users', 'userItems'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserItemLink->exists($id)) {
			throw new NotFoundException(__('Invalid user item link'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserItemLink->save($this->request->data)) {
				$this->Session->setFlash(__('The user item link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user item link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserItemLink.' . $this->UserItemLink->primaryKey => $id));
			$this->request->data = $this->UserItemLink->find('first', $options);
		}
		$users = $this->UserItemLink->User->find('list');
		$userItems = $this->UserItemLink->UserItem->find('list');
		$this->set(compact('users', 'userItems'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserItemLink->id = $id;
		if (!$this->UserItemLink->exists()) {
			throw new NotFoundException(__('Invalid user item link'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserItemLink->delete()) {
			$this->Session->setFlash(__('The user item link has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user item link could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
