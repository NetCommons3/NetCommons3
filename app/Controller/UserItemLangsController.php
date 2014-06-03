<?php
App::uses('AppController', 'Controller');
/**
 * UserItemLangs Controller
 *
 * @property UserItemLang $UserItemLang
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class UserItemLangsController extends AppController {

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
		$this->UserItemLang->recursive = 0;
		$this->set('userItemLangs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserItemLang->exists($id)) {
			throw new NotFoundException(__('Invalid user item lang'));
		}
		$options = array('conditions' => array('UserItemLang.' . $this->UserItemLang->primaryKey => $id));
		$this->set('userItemLang', $this->UserItemLang->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserItemLang->create();
			if ($this->UserItemLang->save($this->request->data)) {
				$this->Session->setFlash(__('The user item lang has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user item lang could not be saved. Please, try again.'));
			}
		}
		$userItems = $this->UserItemLang->UserItem->find('list');
		$this->set(compact('userItems'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserItemLang->exists($id)) {
			throw new NotFoundException(__('Invalid user item lang'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserItemLang->save($this->request->data)) {
				$this->Session->setFlash(__('The user item lang has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user item lang could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserItemLang.' . $this->UserItemLang->primaryKey => $id));
			$this->request->data = $this->UserItemLang->find('first', $options);
		}
		$userItems = $this->UserItemLang->UserItem->find('list');
		$this->set(compact('userItems'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function delete($id = null) {
		$this->UserItemLang->id = $id;
		if (!$this->UserItemLang->exists()) {
			throw new NotFoundException(__('Invalid user item lang'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserItemLang->delete()) {
			$this->Session->setFlash(__('The user item lang has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user item lang could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
