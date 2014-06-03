<?php
App::uses('AppController', 'Controller');
/**
 * Authorities Controller
 *
 * @property Authority $Authority
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class AuthoritiesController extends AppController {

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
		$this->Authority->recursive = 0;
		$this->set('authorities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->Authority->exists($id)) {
			throw new NotFoundException(__('Invalid authority'));
		}
		$options = array('conditions' => array('Authority.' . $this->Authority->primaryKey => $id));
		$this->set('authority', $this->Authority->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Authority->create();
			if ($this->Authority->save($this->request->data)) {
				$this->Session->setFlash(__('The authority has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The authority could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Authority->exists($id)) {
			throw new NotFoundException(__('Invalid authority'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Authority->save($this->request->data)) {
				$this->Session->setFlash(__('The authority has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The authority could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Authority.' . $this->Authority->primaryKey => $id));
			$this->request->data = $this->Authority->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function delete($id = null) {
		$this->Authority->id = $id;
		if (!$this->Authority->exists()) {
			throw new NotFoundException(__('Invalid authority'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Authority->delete()) {
			$this->Session->setFlash(__('The authority has been deleted.'));
		} else {
			$this->Session->setFlash(__('The authority could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
