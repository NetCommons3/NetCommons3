<?php
App::uses('AppController', 'Controller');
/**
 * AuthorityLangs Controller
 *
 * @property AuthorityLang $AuthorityLang
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class AuthorityLangsController extends AppController {

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
		$this->AuthorityLang->recursive = 0;
		$this->set('authorityLangs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->AuthorityLang->exists($id)) {
			throw new NotFoundException(__('Invalid authority lang'));
		}
		$options = array('conditions' => array('AuthorityLang.' . $this->AuthorityLang->primaryKey => $id));
		$this->set('authorityLang', $this->AuthorityLang->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AuthorityLang->create();
			if ($this->AuthorityLang->save($this->request->data)) {
				$this->Session->setFlash(__('The authority lang has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The authority lang could not be saved. Please, try again.'));
			}
		}
		$authorities = $this->AuthorityLang->Authority->find('list');
		$this->set(compact('authorities'));
	}

/**
 * edit method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AuthorityLang->exists($id)) {
			throw new NotFoundException(__('Invalid authority lang'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AuthorityLang->save($this->request->data)) {
				$this->Session->setFlash(__('The authority lang has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The authority lang could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AuthorityLang.' . $this->AuthorityLang->primaryKey => $id));
			$this->request->data = $this->AuthorityLang->find('first', $options);
		}
		$authorities = $this->AuthorityLang->Authority->find('list');
		$this->set(compact('authorities'));
	}

/**
 * delete method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function delete($id = null) {
		$this->AuthorityLang->id = $id;
		if (!$this->AuthorityLang->exists()) {
			throw new NotFoundException(__('Invalid authority lang'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AuthorityLang->delete()) {
			$this->Session->setFlash(__('The authority lang has been deleted.'));
		} else {
			$this->Session->setFlash(__('The authority lang could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
