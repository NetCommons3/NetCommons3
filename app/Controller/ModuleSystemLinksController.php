<?php
App::uses('AppController', 'Controller');
/**
 * ModuleSystemLinks Controller
 *
 * @property ModuleSystemLink $ModuleSystemLink
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class ModuleSystemLinksController extends AppController {

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
		$this->ModuleSystemLink->recursive = 0;
		$this->set('moduleSystemLinks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ModuleSystemLink->exists($id)) {
			throw new NotFoundException(__('Invalid module system link'));
		}
		$options = array('conditions' => array('ModuleSystemLink.' . $this->ModuleSystemLink->primaryKey => $id));
		$this->set('moduleSystemLink', $this->ModuleSystemLink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ModuleSystemLink->create();
			if ($this->ModuleSystemLink->save($this->request->data)) {
				$this->Session->setFlash(__('The module system link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module system link could not be saved. Please, try again.'));
			}
		}
		$authorities = $this->ModuleSystemLink->Authority->find('list');
		$modules = $this->ModuleSystemLink->Module->find('list');
		$this->set(compact('authorities', 'modules'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ModuleSystemLink->exists($id)) {
			throw new NotFoundException(__('Invalid module system link'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ModuleSystemLink->save($this->request->data)) {
				$this->Session->setFlash(__('The module system link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module system link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ModuleSystemLink.' . $this->ModuleSystemLink->primaryKey => $id));
			$this->request->data = $this->ModuleSystemLink->find('first', $options);
		}
		$authorities = $this->ModuleSystemLink->Authority->find('list');
		$modules = $this->ModuleSystemLink->Module->find('list');
		$this->set(compact('authorities', 'modules'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ModuleSystemLink->id = $id;
		if (!$this->ModuleSystemLink->exists()) {
			throw new NotFoundException(__('Invalid module system link'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ModuleSystemLink->delete()) {
			$this->Session->setFlash(__('The module system link has been deleted.'));
		} else {
			$this->Session->setFlash(__('The module system link could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
