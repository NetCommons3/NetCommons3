<?php
App::uses('AppController', 'Controller');
/**
 * PageLayouts Controller
 *
 * @property PageLayout $PageLayout
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class PageLayoutsController extends AppController {

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
		$this->PageLayout->recursive = 0;
		$this->set('pageLayouts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PageLayout->exists($id)) {
			throw new NotFoundException(__('Invalid page layout'));
		}
		$options = array('conditions' => array('PageLayout.' . $this->PageLayout->primaryKey => $id));
		$this->set('pageLayout', $this->PageLayout->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PageLayout->create();
			if ($this->PageLayout->save($this->request->data)) {
				$this->Session->setFlash(__('The page layout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page layout could not be saved. Please, try again.'));
			}
		}
		$pages = $this->PageLayout->Page->find('list');
		$this->set(compact('pages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PageLayout->exists($id)) {
			throw new NotFoundException(__('Invalid page layout'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PageLayout->save($this->request->data)) {
				$this->Session->setFlash(__('The page layout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page layout could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PageLayout.' . $this->PageLayout->primaryKey => $id));
			$this->request->data = $this->PageLayout->find('first', $options);
		}
		$pages = $this->PageLayout->Page->find('list');
		$this->set(compact('pages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function delete($id = null) {
		$this->PageLayout->id = $id;
		if (!$this->PageLayout->exists()) {
			throw new NotFoundException(__('Invalid page layout'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PageLayout->delete()) {
			$this->Session->setFlash(__('The page layout has been deleted.'));
		} else {
			$this->Session->setFlash(__('The page layout could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
