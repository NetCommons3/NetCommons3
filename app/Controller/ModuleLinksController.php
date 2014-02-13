<?php
App::uses('AppController', 'Controller');
/**
 * ModuleLinks Controller
 *
 * @property ModuleLink $ModuleLink
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class ModuleLinksController extends AppController {

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
		$this->ModuleLink->recursive = 0;
		$this->set('moduleLinks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ModuleLink->exists($id)) {
			throw new NotFoundException(__('Invalid module link'));
		}
		$options = array('conditions' => array('ModuleLink.' . $this->ModuleLink->primaryKey => $id));
		$this->set('moduleLink', $this->ModuleLink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ModuleLink->create();
			if ($this->ModuleLink->save($this->request->data)) {
				$this->Session->setFlash(__('The module link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module link could not be saved. Please, try again.'));
			}
		}
		$authorities = $this->ModuleLink->Authority->find('list');
		$modules = $this->ModuleLink->Module->find('list');
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
		if (!$this->ModuleLink->exists($id)) {
			throw new NotFoundException(__('Invalid module link'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ModuleLink->save($this->request->data)) {
				$this->Session->setFlash(__('The module link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ModuleLink.' . $this->ModuleLink->primaryKey => $id));
			$this->request->data = $this->ModuleLink->find('first', $options);
		}
		$authorities = $this->ModuleLink->Authority->find('list');
		$modules = $this->ModuleLink->Module->find('list');
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
		$this->ModuleLink->id = $id;
		if (!$this->ModuleLink->exists()) {
			throw new NotFoundException(__('Invalid module link'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ModuleLink->delete()) {
			$this->Session->setFlash(__('The module link has been deleted.'));
		} else {
			$this->Session->setFlash(__('The module link could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
