<?php
App::uses('AppController', 'Controller');
/**
 * PageThemes Controller
 *
 * @property PageTheme $PageTheme
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class PageThemesController extends AppController {

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
		$this->PageTheme->recursive = 0;
		$this->set('pageThemes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->PageTheme->exists($id)) {
			throw new NotFoundException(__('Invalid page theme'));
		}
		$options = array('conditions' => array('PageTheme.' . $this->PageTheme->primaryKey => $id));
		$this->set('pageTheme', $this->PageTheme->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PageTheme->create();
			if ($this->PageTheme->save($this->request->data)) {
				$this->Session->setFlash(__('The page theme has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page theme could not be saved. Please, try again.'));
			}
		}
		$pages = $this->PageTheme->Page->find('list');
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
		if (!$this->PageTheme->exists($id)) {
			throw new NotFoundException(__('Invalid page theme'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PageTheme->save($this->request->data)) {
				$this->Session->setFlash(__('The page theme has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page theme could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PageTheme.' . $this->PageTheme->primaryKey => $id));
			$this->request->data = $this->PageTheme->find('first', $options);
		}
		$pages = $this->PageTheme->Page->find('list');
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
		$this->PageTheme->id = $id;
		if (!$this->PageTheme->exists()) {
			throw new NotFoundException(__('Invalid page theme'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PageTheme->delete()) {
			$this->Session->setFlash(__('The page theme has been deleted.'));
		} else {
			$this->Session->setFlash(__('The page theme could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
