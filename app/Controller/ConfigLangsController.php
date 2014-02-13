<?php
App::uses('AppController', 'Controller');
/**
 * ConfigLangs Controller
 *
 * @property ConfigLang $ConfigLang
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class ConfigLangsController extends AppController {

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
		$this->ConfigLang->recursive = 0;
		$this->set('configLangs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ConfigLang->exists($id)) {
			throw new NotFoundException(__('Invalid config lang'));
		}
		$options = array('conditions' => array('ConfigLang.' . $this->ConfigLang->primaryKey => $id));
		$this->set('configLang', $this->ConfigLang->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ConfigLang->create();
			if ($this->ConfigLang->save($this->request->data)) {
				$this->Session->setFlash(__('The config lang has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config lang could not be saved. Please, try again.'));
			}
		}
		$modules = $this->ConfigLang->Module->find('list');
		$this->set(compact('modules'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ConfigLang->exists($id)) {
			throw new NotFoundException(__('Invalid config lang'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ConfigLang->save($this->request->data)) {
				$this->Session->setFlash(__('The config lang has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config lang could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ConfigLang.' . $this->ConfigLang->primaryKey => $id));
			$this->request->data = $this->ConfigLang->find('first', $options);
		}
		$modules = $this->ConfigLang->Module->find('list');
		$this->set(compact('modules'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ConfigLang->id = $id;
		if (!$this->ConfigLang->exists()) {
			throw new NotFoundException(__('Invalid config lang'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ConfigLang->delete()) {
			$this->Session->setFlash(__('The config lang has been deleted.'));
		} else {
			$this->Session->setFlash(__('The config lang could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
