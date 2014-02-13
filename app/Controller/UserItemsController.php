<?php
App::uses('AppController', 'Controller');
/**
 * UserItems Controller
 *
 * @property UserItem $UserItem
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class UserItemsController extends AppController {

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
		$this->UserItem->recursive = 0;
		$this->set('userItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserItem->exists($id)) {
			throw new NotFoundException(__('Invalid user item'));
		}
		$options = array('conditions' => array('UserItem.' . $this->UserItem->primaryKey => $id));
		$this->set('userItem', $this->UserItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserItem->create();
			if ($this->UserItem->save($this->request->data)) {
				$this->Session->setFlash(__('The user item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user item could not be saved. Please, try again.'));
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
		if (!$this->UserItem->exists($id)) {
			throw new NotFoundException(__('Invalid user item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserItem->save($this->request->data)) {
				$this->Session->setFlash(__('The user item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserItem.' . $this->UserItem->primaryKey => $id));
			$this->request->data = $this->UserItem->find('first', $options);
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
		$this->UserItem->id = $id;
		if (!$this->UserItem->exists()) {
			throw new NotFoundException(__('Invalid user item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserItem->delete()) {
			$this->Session->setFlash(__('The user item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
