<?php
App::uses('AppController', 'Controller');
/**
 * BlogPosts Controller
 *
 * @property BlogPost $BlogPost
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class BlogPostsController extends AppController {

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
		$this->BlogPost->recursive = 0;
		$this->set('blogPosts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->BlogPost->exists($id)) {
			throw new NotFoundException(__('Invalid blog post'));
		}
		$options = array('conditions' => array('BlogPost.' . $this->BlogPost->primaryKey => $id));
		$this->set('blogPost', $this->BlogPost->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BlogPost->create();
			if ($this->BlogPost->save($this->request->data)) {
				$this->Session->setFlash(__('The blog post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog post could not be saved. Please, try again.'));
			}
		}
		$contents = $this->BlogPost->Content->find('list');
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
		if (!$this->BlogPost->exists($id)) {
			throw new NotFoundException(__('Invalid blog post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BlogPost->save($this->request->data)) {
				$this->Session->setFlash(__('The blog post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BlogPost.' . $this->BlogPost->primaryKey => $id));
			$this->request->data = $this->BlogPost->find('first', $options);
		}
		$contents = $this->BlogPost->Content->find('list');
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
		$this->BlogPost->id = $id;
		if (!$this->BlogPost->exists()) {
			throw new NotFoundException(__('Invalid blog post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BlogPost->delete()) {
			$this->Session->setFlash(__('The blog post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The blog post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
