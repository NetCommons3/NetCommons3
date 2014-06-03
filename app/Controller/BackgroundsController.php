<?php
App::uses('AppController', 'Controller');
/**
 * Backgrounds Controller
 *
 * @property Background $Background
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class BackgroundsController extends AppController {

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
		$this->Background->recursive = 0;
		$this->set('backgrounds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Background->exists($id)) {
			throw new NotFoundException(__('Invalid background'));
		}
		$options = array('conditions' => array('Background.' . $this->Background->primaryKey => $id));
		$this->set('background', $this->Background->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Background->create();
			if ($this->Background->save($this->request->data)) {
				$this->Session->setFlash(__('The background has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The background could not be saved. Please, try again.'));
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
		if (!$this->Background->exists($id)) {
			throw new NotFoundException(__('Invalid background'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Background->save($this->request->data)) {
				$this->Session->setFlash(__('The background has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The background could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Background.' . $this->Background->primaryKey => $id));
			$this->request->data = $this->Background->find('first', $options);
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
		$this->Background->id = $id;
		if (!$this->Background->exists()) {
			throw new NotFoundException(__('Invalid background'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Background->delete()) {
			$this->Session->setFlash(__('The background has been deleted.'));
		} else {
			$this->Session->setFlash(__('The background could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
