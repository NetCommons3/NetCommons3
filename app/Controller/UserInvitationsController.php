<?php
App::uses('AppController', 'Controller');
/**
 * UserInvitations Controller
 *
 * @property UserInvitation $UserInvitation
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class UserInvitationsController extends AppController {

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
		$this->UserInvitation->recursive = 0;
		$this->set('userInvitations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserInvitation->exists($id)) {
			throw new NotFoundException(__('Invalid user invitation'));
		}
		$options = array('conditions' => array('UserInvitation.' . $this->UserInvitation->primaryKey => $id));
		$this->set('userInvitation', $this->UserInvitation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserInvitation->create();
			if ($this->UserInvitation->save($this->request->data)) {
				$this->Session->setFlash(__('The user invitation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user invitation could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserInvitation->exists($id)) {
			throw new NotFoundException(__('Invalid user invitation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserInvitation->save($this->request->data)) {
				$this->Session->setFlash(__('The user invitation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user invitation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserInvitation.' . $this->UserInvitation->primaryKey => $id));
			$this->request->data = $this->UserInvitation->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function delete($id = null) {
		$this->UserInvitation->id = $id;
		if (!$this->UserInvitation->exists()) {
			throw new NotFoundException(__('Invalid user invitation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserInvitation->delete()) {
			$this->Session->setFlash(__('The user invitation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user invitation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
