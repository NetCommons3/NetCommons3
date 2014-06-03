<?php
App::uses('AppController', 'Controller');
/**
 * Modules Controller
 *
 * @property Module $Module
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class ModulesController extends AppController {

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
		$this->Module->recursive = 0;
		$this->set('modules', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Module->exists($id)) {
			throw new NotFoundException(__('Invalid module'));
		}
		$options = array('conditions' => array('Module.' . $this->Module->primaryKey => $id));
		$this->set('module', $this->Module->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Module->create();
			if ($this->Module->save($this->request->data)) {
				$this->Session->setFlash(__('The module has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Module->exists($id)) {
			throw new NotFoundException(__('Invalid module'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Module->save($this->request->data)) {
				$this->Session->setFlash(__('The module has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Module.' . $this->Module->primaryKey => $id));
			$this->request->data = $this->Module->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function delete($id = null) {
		$this->Module->id = $id;
		if (!$this->Module->exists()) {
			throw new NotFoundException(__('Invalid module'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Module->delete()) {
			$this->Session->setFlash(__('The module has been deleted.'));
		} else {
			$this->Session->setFlash(__('The module could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
