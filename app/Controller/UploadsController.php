<?php
App::uses('AppController', 'Controller');
/**
 * Uploads Controller
 *
 * @property Upload $Upload
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class UploadsController extends AppController {

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
		$this->Upload->recursive = 0;
		$this->set('uploads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Upload->exists($id)) {
			throw new NotFoundException(__('Invalid upload'));
		}
		$options = array('conditions' => array('Upload.' . $this->Upload->primaryKey => $id));
		$this->set('upload', $this->Upload->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Upload->create();
			if ($this->Upload->save($this->request->data)) {
				$this->Session->setFlash(__('The upload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
			}
		}
		$users = $this->Upload->User->find('list');
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
		if (!$this->Upload->exists($id)) {
			throw new NotFoundException(__('Invalid upload'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Upload->save($this->request->data)) {
				$this->Session->setFlash(__('The upload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Upload.' . $this->Upload->primaryKey => $id));
			$this->request->data = $this->Upload->find('first', $options);
		}
		$users = $this->Upload->User->find('list');
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
		$this->Upload->id = $id;
		if (!$this->Upload->exists()) {
			throw new NotFoundException(__('Invalid upload'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Upload->delete()) {
			$this->Session->setFlash(__('The upload has been deleted.'));
		} else {
			$this->Session->setFlash(__('The upload could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
