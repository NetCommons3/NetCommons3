<?php
App::uses('AppController', 'Controller');
/**
 * BlogStyles Controller
 *
 * @property BlogStyle $BlogStyle
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class BlogStylesController extends AppController {

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
		$this->BlogStyle->recursive = 0;
		$this->set('blogStyles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BlogStyle->exists($id)) {
			throw new NotFoundException(__('Invalid blog style'));
		}
		$options = array('conditions' => array('BlogStyle.' . $this->BlogStyle->primaryKey => $id));
		$this->set('blogStyle', $this->BlogStyle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BlogStyle->create();
			if ($this->BlogStyle->save($this->request->data)) {
				$this->Session->setFlash(__('The blog style has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog style could not be saved. Please, try again.'));
			}
		}
		$blocks = $this->BlogStyle->Block->find('list');
		$this->set(compact('blocks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BlogStyle->exists($id)) {
			throw new NotFoundException(__('Invalid blog style'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BlogStyle->save($this->request->data)) {
				$this->Session->setFlash(__('The blog style has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog style could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BlogStyle.' . $this->BlogStyle->primaryKey => $id));
			$this->request->data = $this->BlogStyle->find('first', $options);
		}
		$blocks = $this->BlogStyle->Block->find('list');
		$this->set(compact('blocks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BlogStyle->id = $id;
		if (!$this->BlogStyle->exists()) {
			throw new NotFoundException(__('Invalid blog style'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BlogStyle->delete()) {
			$this->Session->setFlash(__('The blog style has been deleted.'));
		} else {
			$this->Session->setFlash(__('The blog style could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
