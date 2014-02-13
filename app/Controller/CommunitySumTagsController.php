<?php
App::uses('AppController', 'Controller');
/**
 * CommunitySumTags Controller
 *
 * @property CommunitySumTag $CommunitySumTag
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class CommunitySumTagsController extends AppController {

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
		$this->CommunitySumTag->recursive = 0;
		$this->set('communitySumTags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CommunitySumTag->exists($id)) {
			throw new NotFoundException(__('Invalid community sum tag'));
		}
		$options = array('conditions' => array('CommunitySumTag.' . $this->CommunitySumTag->primaryKey => $id));
		$this->set('communitySumTag', $this->CommunitySumTag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CommunitySumTag->create();
			if ($this->CommunitySumTag->save($this->request->data)) {
				$this->Session->setFlash(__('The community sum tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The community sum tag could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CommunitySumTag->exists($id)) {
			throw new NotFoundException(__('Invalid community sum tag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CommunitySumTag->save($this->request->data)) {
				$this->Session->setFlash(__('The community sum tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The community sum tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CommunitySumTag.' . $this->CommunitySumTag->primaryKey => $id));
			$this->request->data = $this->CommunitySumTag->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CommunitySumTag->id = $id;
		if (!$this->CommunitySumTag->exists()) {
			throw new NotFoundException(__('Invalid community sum tag'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CommunitySumTag->delete()) {
			$this->Session->setFlash(__('The community sum tag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The community sum tag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
