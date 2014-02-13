<?php
App::uses('AppController', 'Controller');
/**
 * UserItemAuthorityLinks Controller
 *
 * @property UserItemAuthorityLink $UserItemAuthorityLink
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class UserItemAuthorityLinksController extends AppController {

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
		$this->UserItemAuthorityLink->recursive = 0;
		$this->set('userItemAuthorityLinks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserItemAuthorityLink->exists($id)) {
			throw new NotFoundException(__('Invalid user item authority link'));
		}
		$options = array('conditions' => array('UserItemAuthorityLink.' . $this->UserItemAuthorityLink->primaryKey => $id));
		$this->set('userItemAuthorityLink', $this->UserItemAuthorityLink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserItemAuthorityLink->create();
			if ($this->UserItemAuthorityLink->save($this->request->data)) {
				$this->Session->setFlash(__('The user item authority link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user item authority link could not be saved. Please, try again.'));
			}
		}
		$userItems = $this->UserItemAuthorityLink->UserItem->find('list');
		$this->set(compact('userItems'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserItemAuthorityLink->exists($id)) {
			throw new NotFoundException(__('Invalid user item authority link'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserItemAuthorityLink->save($this->request->data)) {
				$this->Session->setFlash(__('The user item authority link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user item authority link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserItemAuthorityLink.' . $this->UserItemAuthorityLink->primaryKey => $id));
			$this->request->data = $this->UserItemAuthorityLink->find('first', $options);
		}
		$userItems = $this->UserItemAuthorityLink->UserItem->find('list');
		$this->set(compact('userItems'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserItemAuthorityLink->id = $id;
		if (!$this->UserItemAuthorityLink->exists()) {
			throw new NotFoundException(__('Invalid user item authority link'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserItemAuthorityLink->delete()) {
			$this->Session->setFlash(__('The user item authority link has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user item authority link could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
