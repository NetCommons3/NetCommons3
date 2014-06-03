<?php
App::uses('AppController', 'Controller');
/**
 * BlogComments Controller
 *
 * @property BlogComment $BlogComment
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class BlogCommentsController extends AppController {

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
		$this->BlogComment->recursive = 0;
		$this->set('blogComments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BlogComment->exists($id)) {
			throw new NotFoundException(__('Invalid blog comment'));
		}
		$options = array('conditions' => array('BlogComment.' . $this->BlogComment->primaryKey => $id));
		$this->set('blogComment', $this->BlogComment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BlogComment->create();
			if ($this->BlogComment->save($this->request->data)) {
				$this->Session->setFlash(__('The blog comment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog comment could not be saved. Please, try again.'));
			}
		}
		$contents = $this->BlogComment->Content->find('list');
		$blogPosts = $this->BlogComment->BlogPost->find('list');
		$parentBlogComments = $this->BlogComment->ParentBlogComment->find('list');
		$this->set(compact('contents', 'blogPosts', 'parentBlogComments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BlogComment->exists($id)) {
			throw new NotFoundException(__('Invalid blog comment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BlogComment->save($this->request->data)) {
				$this->Session->setFlash(__('The blog comment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog comment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BlogComment.' . $this->BlogComment->primaryKey => $id));
			$this->request->data = $this->BlogComment->find('first', $options);
		}
		$contents = $this->BlogComment->Content->find('list');
		$blogPosts = $this->BlogComment->BlogPost->find('list');
		$parentBlogComments = $this->BlogComment->ParentBlogComment->find('list');
		$this->set(compact('contents', 'blogPosts', 'parentBlogComments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function delete($id = null) {
		$this->BlogComment->id = $id;
		if (!$this->BlogComment->exists()) {
			throw new NotFoundException(__('Invalid blog comment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BlogComment->delete()) {
			$this->Session->setFlash(__('The blog comment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The blog comment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
