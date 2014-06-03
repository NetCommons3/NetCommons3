<?php
App::uses('AppController', 'Controller');
/**
 * BlogTerms Controller
 *
 * @property BlogTerm $BlogTerm
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class BlogTermsController extends AppController {

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
		$this->BlogTerm->recursive = 0;
		$this->set('blogTerms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->BlogTerm->exists($id)) {
			throw new NotFoundException(__('Invalid blog term'));
		}
		$options = array('conditions' => array('BlogTerm.' . $this->BlogTerm->primaryKey => $id));
		$this->set('blogTerm', $this->BlogTerm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BlogTerm->create();
			if ($this->BlogTerm->save($this->request->data)) {
				$this->Session->setFlash(__('The blog term has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog term could not be saved. Please, try again.'));
			}
		}
		$contents = $this->BlogTerm->Content->find('list');
		$this->set(compact('contents'));
	}

/**
 * edit method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BlogTerm->exists($id)) {
			throw new NotFoundException(__('Invalid blog term'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BlogTerm->save($this->request->data)) {
				$this->Session->setFlash(__('The blog term has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog term could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BlogTerm.' . $this->BlogTerm->primaryKey => $id));
			$this->request->data = $this->BlogTerm->find('first', $options);
		}
		$contents = $this->BlogTerm->Content->find('list');
		$this->set(compact('contents'));
	}

/**
 * delete method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function delete($id = null) {
		$this->BlogTerm->id = $id;
		if (!$this->BlogTerm->exists()) {
			throw new NotFoundException(__('Invalid blog term'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BlogTerm->delete()) {
			$this->Session->setFlash(__('The blog term has been deleted.'));
		} else {
			$this->Session->setFlash(__('The blog term could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
