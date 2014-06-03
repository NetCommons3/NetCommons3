<?php
App::uses('AppController', 'Controller');
/**
 * BlogTermLinks Controller
 *
 * @property BlogTermLink $BlogTermLink
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class BlogTermLinksController extends AppController {

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
		$this->BlogTermLink->recursive = 0;
		$this->set('blogTermLinks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->BlogTermLink->exists($id)) {
			throw new NotFoundException(__('Invalid blog term link'));
		}
		$options = array('conditions' => array('BlogTermLink.' . $this->BlogTermLink->primaryKey => $id));
		$this->set('blogTermLink', $this->BlogTermLink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BlogTermLink->create();
			if ($this->BlogTermLink->save($this->request->data)) {
				$this->Session->setFlash(__('The blog term link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog term link could not be saved. Please, try again.'));
			}
		}
		$contents = $this->BlogTermLink->Content->find('list');
		$blogPosts = $this->BlogTermLink->BlogPost->find('list');
		$blogTerms = $this->BlogTermLink->BlogTerm->find('list');
		$this->set(compact('contents', 'blogPosts', 'blogTerms'));
	}

/**
 * edit method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BlogTermLink->exists($id)) {
			throw new NotFoundException(__('Invalid blog term link'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BlogTermLink->save($this->request->data)) {
				$this->Session->setFlash(__('The blog term link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog term link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BlogTermLink.' . $this->BlogTermLink->primaryKey => $id));
			$this->request->data = $this->BlogTermLink->find('first', $options);
		}
		$contents = $this->BlogTermLink->Content->find('list');
		$blogPosts = $this->BlogTermLink->BlogPost->find('list');
		$blogTerms = $this->BlogTermLink->BlogTerm->find('list');
		$this->set(compact('contents', 'blogPosts', 'blogTerms'));
	}

/**
 * delete method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function delete($id = null) {
		$this->BlogTermLink->id = $id;
		if (!$this->BlogTermLink->exists()) {
			throw new NotFoundException(__('Invalid blog term link'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BlogTermLink->delete()) {
			$this->Session->setFlash(__('The blog term link has been deleted.'));
		} else {
			$this->Session->setFlash(__('The blog term link could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
