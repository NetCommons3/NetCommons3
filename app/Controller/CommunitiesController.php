<?php
App::uses('AppController', 'Controller');
/**
 * Communities Controller
 *
 * @property Community $Community
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class CommunitiesController extends AppController {

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
		$this->Community->recursive = 0;
		$this->set('communities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Community->exists($id)) {
			throw new NotFoundException(__('Invalid community'));
		}
		$options = array('conditions' => array('Community.' . $this->Community->primaryKey => $id));
		$this->set('community', $this->Community->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Community->create();
			if ($this->Community->save($this->request->data)) {
				$this->Session->setFlash(__('The community has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The community could not be saved. Please, try again.'));
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
		if (!$this->Community->exists($id)) {
			throw new NotFoundException(__('Invalid community'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Community->save($this->request->data)) {
				$this->Session->setFlash(__('The community has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The community could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Community.' . $this->Community->primaryKey => $id));
			$this->request->data = $this->Community->find('first', $options);
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
		$this->Community->id = $id;
		if (!$this->Community->exists()) {
			throw new NotFoundException(__('Invalid community'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Community->delete()) {
			$this->Session->setFlash(__('The community has been deleted.'));
		} else {
			$this->Session->setFlash(__('The community could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
