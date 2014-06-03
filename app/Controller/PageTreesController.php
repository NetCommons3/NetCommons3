<?php
App::uses('AppController', 'Controller');
/**
 * PageTrees Controller
 *
 * @property PageTree $PageTree
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class PageTreesController extends AppController {

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
		$this->PageTree->recursive = 0;
		$this->set('pageTrees', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PageTree->exists($id)) {
			throw new NotFoundException(__('Invalid page tree'));
		}
		$options = array('conditions' => array('PageTree.' . $this->PageTree->primaryKey => $id));
		$this->set('pageTree', $this->PageTree->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PageTree->create();
			if ($this->PageTree->save($this->request->data)) {
				$this->Session->setFlash(__('The page tree has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page tree could not be saved. Please, try again.'));
			}
		}
		$parentPageTrees = $this->PageTree->ParentPageTree->find('list');
		$this->set(compact('parentPageTrees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PageTree->exists($id)) {
			throw new NotFoundException(__('Invalid page tree'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PageTree->save($this->request->data)) {
				$this->Session->setFlash(__('The page tree has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page tree could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PageTree.' . $this->PageTree->primaryKey => $id));
			$this->request->data = $this->PageTree->find('first', $options);
		}
		$parentPageTrees = $this->PageTree->ParentPageTree->find('list');
		$this->set(compact('parentPageTrees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function delete($id = null) {
		$this->PageTree->id = $id;
		if (!$this->PageTree->exists()) {
			throw new NotFoundException(__('Invalid page tree'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PageTree->delete()) {
			$this->Session->setFlash(__('The page tree has been deleted.'));
		} else {
			$this->Session->setFlash(__('The page tree could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
