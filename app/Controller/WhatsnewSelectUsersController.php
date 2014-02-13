<?php
App::uses('AppController', 'Controller');
/**
 * WhatsnewSelectUsers Controller
 *
 * @property WhatsnewSelectUser $WhatsnewSelectUser
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class WhatsnewSelectUsersController extends AppController {

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
		$this->WhatsnewSelectUser->recursive = 0;
		$this->set('whatsnewSelectUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WhatsnewSelectUser->exists($id)) {
			throw new NotFoundException(__('Invalid whatsnew select user'));
		}
		$options = array('conditions' => array('WhatsnewSelectUser.' . $this->WhatsnewSelectUser->primaryKey => $id));
		$this->set('whatsnewSelectUser', $this->WhatsnewSelectUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WhatsnewSelectUser->create();
			if ($this->WhatsnewSelectUser->save($this->request->data)) {
				$this->Session->setFlash(__('The whatsnew select user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The whatsnew select user could not be saved. Please, try again.'));
			}
		}
		$blocks = $this->WhatsnewSelectUser->Block->find('list');
		$users = $this->WhatsnewSelectUser->User->find('list');
		$this->set(compact('blocks', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WhatsnewSelectUser->exists($id)) {
			throw new NotFoundException(__('Invalid whatsnew select user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WhatsnewSelectUser->save($this->request->data)) {
				$this->Session->setFlash(__('The whatsnew select user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The whatsnew select user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WhatsnewSelectUser.' . $this->WhatsnewSelectUser->primaryKey => $id));
			$this->request->data = $this->WhatsnewSelectUser->find('first', $options);
		}
		$blocks = $this->WhatsnewSelectUser->Block->find('list');
		$users = $this->WhatsnewSelectUser->User->find('list');
		$this->set(compact('blocks', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WhatsnewSelectUser->id = $id;
		if (!$this->WhatsnewSelectUser->exists()) {
			throw new NotFoundException(__('Invalid whatsnew select user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->WhatsnewSelectUser->delete()) {
			$this->Session->setFlash(__('The whatsnew select user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The whatsnew select user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
