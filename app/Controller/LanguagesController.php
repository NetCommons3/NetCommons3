<?php
App::uses('AppController', 'Controller');
/**
 * Languages Controller
 *
 * @property Language $Language
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class LanguagesController extends AppController {

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
		$this->Language->recursive = 0;
		$this->set('languages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Language->exists($id)) {
			throw new NotFoundException(__('Invalid language'));
		}
		$options = array('conditions' => array('Language.' . $this->Language->primaryKey => $id));
		$this->set('language', $this->Language->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Language->create();
			if ($this->Language->save($this->request->data)) {
				$this->Session->setFlash(__('The language has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The language could not be saved. Please, try again.'));
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
		if (!$this->Language->exists($id)) {
			throw new NotFoundException(__('Invalid language'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Language->save($this->request->data)) {
				$this->Session->setFlash(__('The language has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The language could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Language.' . $this->Language->primaryKey => $id));
			$this->request->data = $this->Language->find('first', $options);
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
		$this->Language->id = $id;
		if (!$this->Language->exists()) {
			throw new NotFoundException(__('Invalid language'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Language->delete()) {
			$this->Session->setFlash(__('The language has been deleted.'));
		} else {
			$this->Session->setFlash(__('The language could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
