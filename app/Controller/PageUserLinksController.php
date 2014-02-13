<?php
App::uses('AppController', 'Controller');
/**
 * PageUserLinks Controller
 *
 * @property PageUserLink $PageUserLink
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class PageUserLinksController extends AppController {

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
		$this->PageUserLink->recursive = 0;
		$this->set('pageUserLinks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PageUserLink->exists($id)) {
			throw new NotFoundException(__('Invalid page user link'));
		}
		$options = array('conditions' => array('PageUserLink.' . $this->PageUserLink->primaryKey => $id));
		$this->set('pageUserLink', $this->PageUserLink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PageUserLink->create();
			if ($this->PageUserLink->save($this->request->data)) {
				$this->Session->setFlash(__('The page user link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page user link could not be saved. Please, try again.'));
			}
		}
		$users = $this->PageUserLink->User->find('list');
		$authorities = $this->PageUserLink->Authority->find('list');
		$this->set(compact('users', 'authorities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PageUserLink->exists($id)) {
			throw new NotFoundException(__('Invalid page user link'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PageUserLink->save($this->request->data)) {
				$this->Session->setFlash(__('The page user link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page user link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PageUserLink.' . $this->PageUserLink->primaryKey => $id));
			$this->request->data = $this->PageUserLink->find('first', $options);
		}
		$users = $this->PageUserLink->User->find('list');
		$authorities = $this->PageUserLink->Authority->find('list');
		$this->set(compact('users', 'authorities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PageUserLink->id = $id;
		if (!$this->PageUserLink->exists()) {
			throw new NotFoundException(__('Invalid page user link'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PageUserLink->delete()) {
			$this->Session->setFlash(__('The page user link has been deleted.'));
		} else {
			$this->Session->setFlash(__('The page user link could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
