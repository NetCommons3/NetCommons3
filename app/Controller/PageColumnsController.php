<?php
App::uses('AppController', 'Controller');
/**
 * PageColumns Controller
 *
 * @property PageColumn $PageColumn
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class PageColumnsController extends AppController {

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
		$this->PageColumn->recursive = 0;
		$this->set('pageColumns', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->PageColumn->exists($id)) {
			throw new NotFoundException(__('Invalid page column'));
		}
		$options = array('conditions' => array('PageColumn.' . $this->PageColumn->primaryKey => $id));
		$this->set('pageColumn', $this->PageColumn->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PageColumn->create();
			if ($this->PageColumn->save($this->request->data)) {
				$this->Session->setFlash(__('The page column has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page column could not be saved. Please, try again.'));
			}
		}
		$pages = $this->PageColumn->Page->find('list');
		$this->set(compact('pages'));
	}

/**
 * edit method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PageColumn->exists($id)) {
			throw new NotFoundException(__('Invalid page column'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PageColumn->save($this->request->data)) {
				$this->Session->setFlash(__('The page column has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page column could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PageColumn.' . $this->PageColumn->primaryKey => $id));
			$this->request->data = $this->PageColumn->find('first', $options);
		}
		$pages = $this->PageColumn->Page->find('list');
		$this->set(compact('pages'));
	}

/**
 * delete method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function delete($id = null) {
		$this->PageColumn->id = $id;
		if (!$this->PageColumn->exists()) {
			throw new NotFoundException(__('Invalid page column'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PageColumn->delete()) {
			$this->Session->setFlash(__('The page column has been deleted.'));
		} else {
			$this->Session->setFlash(__('The page column could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
