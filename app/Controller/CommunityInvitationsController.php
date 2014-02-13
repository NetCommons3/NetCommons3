<?php
App::uses('AppController', 'Controller');
/**
 * CommunityInvitations Controller
 *
 * @property CommunityInvitation $CommunityInvitation
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class CommunityInvitationsController extends AppController {

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
		$this->CommunityInvitation->recursive = 0;
		$this->set('communityInvitations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CommunityInvitation->exists($id)) {
			throw new NotFoundException(__('Invalid community invitation'));
		}
		$options = array('conditions' => array('CommunityInvitation.' . $this->CommunityInvitation->primaryKey => $id));
		$this->set('communityInvitation', $this->CommunityInvitation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CommunityInvitation->create();
			if ($this->CommunityInvitation->save($this->request->data)) {
				$this->Session->setFlash(__('The community invitation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The community invitation could not be saved. Please, try again.'));
			}
		}
		$users = $this->CommunityInvitation->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CommunityInvitation->exists($id)) {
			throw new NotFoundException(__('Invalid community invitation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CommunityInvitation->save($this->request->data)) {
				$this->Session->setFlash(__('The community invitation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The community invitation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CommunityInvitation.' . $this->CommunityInvitation->primaryKey => $id));
			$this->request->data = $this->CommunityInvitation->find('first', $options);
		}
		$users = $this->CommunityInvitation->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CommunityInvitation->id = $id;
		if (!$this->CommunityInvitation->exists()) {
			throw new NotFoundException(__('Invalid community invitation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CommunityInvitation->delete()) {
			$this->Session->setFlash(__('The community invitation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The community invitation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
