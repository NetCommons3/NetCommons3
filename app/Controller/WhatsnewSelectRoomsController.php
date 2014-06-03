<?php
App::uses('AppController', 'Controller');
/**
 * WhatsnewSelectRooms Controller
 *
 * @property WhatsnewSelectRoom $WhatsnewSelectRoom
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class WhatsnewSelectRoomsController extends AppController {

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
		$this->WhatsnewSelectRoom->recursive = 0;
		$this->set('whatsnewSelectRooms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WhatsnewSelectRoom->exists($id)) {
			throw new NotFoundException(__('Invalid whatsnew select room'));
		}
		$options = array('conditions' => array('WhatsnewSelectRoom.' . $this->WhatsnewSelectRoom->primaryKey => $id));
		$this->set('whatsnewSelectRoom', $this->WhatsnewSelectRoom->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WhatsnewSelectRoom->create();
			if ($this->WhatsnewSelectRoom->save($this->request->data)) {
				$this->Session->setFlash(__('The whatsnew select room has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The whatsnew select room could not be saved. Please, try again.'));
			}
		}
		$blocks = $this->WhatsnewSelectRoom->Block->find('list');
		$this->set(compact('blocks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WhatsnewSelectRoom->exists($id)) {
			throw new NotFoundException(__('Invalid whatsnew select room'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WhatsnewSelectRoom->save($this->request->data)) {
				$this->Session->setFlash(__('The whatsnew select room has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The whatsnew select room could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WhatsnewSelectRoom.' . $this->WhatsnewSelectRoom->primaryKey => $id));
			$this->request->data = $this->WhatsnewSelectRoom->find('first', $options);
		}
		$blocks = $this->WhatsnewSelectRoom->Block->find('list');
		$this->set(compact('blocks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id id
 * @return void
 */
	public function delete($id = null) {
		$this->WhatsnewSelectRoom->id = $id;
		if (!$this->WhatsnewSelectRoom->exists()) {
			throw new NotFoundException(__('Invalid whatsnew select room'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->WhatsnewSelectRoom->delete()) {
			$this->Session->setFlash(__('The whatsnew select room has been deleted.'));
		} else {
			$this->Session->setFlash(__('The whatsnew select room could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
