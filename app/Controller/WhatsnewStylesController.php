<?php
App::uses('AppController', 'Controller');
/**
 * WhatsnewStyles Controller
 *
 * @property WhatsnewStyle $WhatsnewStyle
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class WhatsnewStylesController extends AppController {

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
		$this->WhatsnewStyle->recursive = 0;
		$this->set('whatsnewStyles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WhatsnewStyle->exists($id)) {
			throw new NotFoundException(__('Invalid whatsnew style'));
		}
		$options = array('conditions' => array('WhatsnewStyle.' . $this->WhatsnewStyle->primaryKey => $id));
		$this->set('whatsnewStyle', $this->WhatsnewStyle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WhatsnewStyle->create();
			if ($this->WhatsnewStyle->save($this->request->data)) {
				$this->Session->setFlash(__('The whatsnew style has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The whatsnew style could not be saved. Please, try again.'));
			}
		}
		$blocks = $this->WhatsnewStyle->Block->find('list');
		$this->set(compact('blocks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WhatsnewStyle->exists($id)) {
			throw new NotFoundException(__('Invalid whatsnew style'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WhatsnewStyle->save($this->request->data)) {
				$this->Session->setFlash(__('The whatsnew style has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The whatsnew style could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WhatsnewStyle.' . $this->WhatsnewStyle->primaryKey => $id));
			$this->request->data = $this->WhatsnewStyle->find('first', $options);
		}
		$blocks = $this->WhatsnewStyle->Block->find('list');
		$this->set(compact('blocks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WhatsnewStyle->id = $id;
		if (!$this->WhatsnewStyle->exists()) {
			throw new NotFoundException(__('Invalid whatsnew style'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->WhatsnewStyle->delete()) {
			$this->Session->setFlash(__('The whatsnew style has been deleted.'));
		} else {
			$this->Session->setFlash(__('The whatsnew style could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
