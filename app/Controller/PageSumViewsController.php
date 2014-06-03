<?php
App::uses('AppController', 'Controller');
/**
 * PageSumViews Controller
 *
 * @property PageSumView $PageSumView
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class PageSumViewsController extends AppController {

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
		$this->PageSumView->recursive = 0;
		$this->set('pageSumViews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->PageSumView->exists($id)) {
			throw new NotFoundException(__('Invalid page sum view'));
		}
		$options = array('conditions' => array('PageSumView.' . $this->PageSumView->primaryKey => $id));
		$this->set('pageSumView', $this->PageSumView->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PageSumView->create();
			if ($this->PageSumView->save($this->request->data)) {
				$this->Session->setFlash(__('The page sum view has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page sum view could not be saved. Please, try again.'));
			}
		}
		$users = $this->PageSumView->User->find('list');
		$pages = $this->PageSumView->Page->find('list');
		$this->set(compact('users', 'pages'));
	}

/**
 * edit method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PageSumView->exists($id)) {
			throw new NotFoundException(__('Invalid page sum view'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PageSumView->save($this->request->data)) {
				$this->Session->setFlash(__('The page sum view has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page sum view could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PageSumView.' . $this->PageSumView->primaryKey => $id));
			$this->request->data = $this->PageSumView->find('first', $options);
		}
		$users = $this->PageSumView->User->find('list');
		$pages = $this->PageSumView->Page->find('list');
		$this->set(compact('users', 'pages'));
	}

/**
 * delete method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function delete($id = null) {
		$this->PageSumView->id = $id;
		if (!$this->PageSumView->exists()) {
			throw new NotFoundException(__('Invalid page sum view'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PageSumView->delete()) {
			$this->Session->setFlash(__('The page sum view has been deleted.'));
		} else {
			$this->Session->setFlash(__('The page sum view could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
