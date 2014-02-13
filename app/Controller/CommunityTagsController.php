<?php
App::uses('AppController', 'Controller');
/**
 * CommunityTags Controller
 *
 * @property CommunityTag $CommunityTag
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class CommunityTagsController extends AppController {

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
		$this->CommunityTag->recursive = 0;
		$this->set('communityTags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CommunityTag->exists($id)) {
			throw new NotFoundException(__('Invalid community tag'));
		}
		$options = array('conditions' => array('CommunityTag.' . $this->CommunityTag->primaryKey => $id));
		$this->set('communityTag', $this->CommunityTag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CommunityTag->create();
			if ($this->CommunityTag->save($this->request->data)) {
				$this->Session->setFlash(__('The community tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The community tag could not be saved. Please, try again.'));
			}
		}
		$communitySumTags = $this->CommunityTag->CommunitySumTag->find('list');
		$this->set(compact('communitySumTags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CommunityTag->exists($id)) {
			throw new NotFoundException(__('Invalid community tag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CommunityTag->save($this->request->data)) {
				$this->Session->setFlash(__('The community tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The community tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CommunityTag.' . $this->CommunityTag->primaryKey => $id));
			$this->request->data = $this->CommunityTag->find('first', $options);
		}
		$communitySumTags = $this->CommunityTag->CommunitySumTag->find('list');
		$this->set(compact('communitySumTags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CommunityTag->id = $id;
		if (!$this->CommunityTag->exists()) {
			throw new NotFoundException(__('Invalid community tag'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CommunityTag->delete()) {
			$this->Session->setFlash(__('The community tag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The community tag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
