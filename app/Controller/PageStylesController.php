<?php
App::uses('AppController', 'Controller');
/**
 * PageStyles Controller
 *
 * @property PageStyle $PageStyle
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class PageStylesController extends AppController {

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
		$this->PageStyle->recursive = 0;
		$this->set('pageStyles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->PageStyle->exists($id)) {
			throw new NotFoundException(__('Invalid page style'));
		}
		$options = array('conditions' => array('PageStyle.' . $this->PageStyle->primaryKey => $id));
		$this->set('pageStyle', $this->PageStyle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PageStyle->create();
			if ($this->PageStyle->save($this->request->data)) {
				$this->Session->setFlash(__('The page style has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page style could not be saved. Please, try again.'));
			}
		}
		$pages = $this->PageStyle->Page->find('list');
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
		if (!$this->PageStyle->exists($id)) {
			throw new NotFoundException(__('Invalid page style'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PageStyle->save($this->request->data)) {
				$this->Session->setFlash(__('The page style has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page style could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PageStyle.' . $this->PageStyle->primaryKey => $id));
			$this->request->data = $this->PageStyle->find('first', $options);
		}
		$pages = $this->PageStyle->Page->find('list');
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
		$this->PageStyle->id = $id;
		if (!$this->PageStyle->exists()) {
			throw new NotFoundException(__('Invalid page style'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PageStyle->delete()) {
			$this->Session->setFlash(__('The page style has been deleted.'));
		} else {
			$this->Session->setFlash(__('The page style could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
