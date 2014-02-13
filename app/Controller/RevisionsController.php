<?php
App::uses('AppController', 'Controller');
/**
 * Revisions Controller
 *
 * @property Revision $Revision
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class RevisionsController extends AppController {

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
		$this->Revision->recursive = 0;
		$this->set('revisions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Revision->exists($id)) {
			throw new NotFoundException(__('Invalid revision'));
		}
		$options = array('conditions' => array('Revision.' . $this->Revision->primaryKey => $id));
		$this->set('revision', $this->Revision->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Revision->create();
			if ($this->Revision->save($this->request->data)) {
				$this->Session->setFlash(__('The revision has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revision could not be saved. Please, try again.'));
			}
		}
		$contents = $this->Revision->Content->find('list');
		$this->set(compact('contents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Revision->exists($id)) {
			throw new NotFoundException(__('Invalid revision'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Revision->save($this->request->data)) {
				$this->Session->setFlash(__('The revision has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revision could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Revision.' . $this->Revision->primaryKey => $id));
			$this->request->data = $this->Revision->find('first', $options);
		}
		$contents = $this->Revision->Content->find('list');
		$this->set(compact('contents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Revision->id = $id;
		if (!$this->Revision->exists()) {
			throw new NotFoundException(__('Invalid revision'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Revision->delete()) {
			$this->Session->setFlash(__('The revision has been deleted.'));
		} else {
			$this->Session->setFlash(__('The revision could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
