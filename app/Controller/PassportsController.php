<?php
App::uses('AppController', 'Controller');
/**
 * Passports Controller
 *
 * @property Passport $Passport
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class PassportsController extends AppController {

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
		$this->Passport->recursive = 0;
		$this->set('passports', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Passport->exists($id)) {
			throw new NotFoundException(__('Invalid passport'));
		}
		$options = array('conditions' => array('Passport.' . $this->Passport->primaryKey => $id));
		$this->set('passport', $this->Passport->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Passport->create();
			if ($this->Passport->save($this->request->data)) {
				$this->Session->setFlash(__('The passport has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The passport could not be saved. Please, try again.'));
			}
		}
		$users = $this->Passport->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Passport->exists($id)) {
			throw new NotFoundException(__('Invalid passport'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Passport->save($this->request->data)) {
				$this->Session->setFlash(__('The passport has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The passport could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Passport.' . $this->Passport->primaryKey => $id));
			$this->request->data = $this->Passport->find('first', $options);
		}
		$users = $this->Passport->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Passport->id = $id;
		if (!$this->Passport->exists()) {
			throw new NotFoundException(__('Invalid passport'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Passport->delete()) {
			$this->Session->setFlash(__('The passport has been deleted.'));
		} else {
			$this->Session->setFlash(__('The passport could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
