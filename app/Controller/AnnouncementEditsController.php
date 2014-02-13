<?php
App::uses('AppController', 'Controller');
/**
 * AnnouncementEdits Controller
 *
 * @property AnnouncementEdit $AnnouncementEdit
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class AnnouncementEditsController extends AppController {

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
		$this->AnnouncementEdit->recursive = 0;
		$this->set('announcementEdits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AnnouncementEdit->exists($id)) {
			throw new NotFoundException(__('Invalid announcement edit'));
		}
		$options = array('conditions' => array('AnnouncementEdit.' . $this->AnnouncementEdit->primaryKey => $id));
		$this->set('announcementEdit', $this->AnnouncementEdit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AnnouncementEdit->create();
			if ($this->AnnouncementEdit->save($this->request->data)) {
				$this->Session->setFlash(__('The announcement edit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The announcement edit could not be saved. Please, try again.'));
			}
		}
		$contents = $this->AnnouncementEdit->Content->find('list');
		$this->set(compact('contents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AnnouncementEdit->exists($id)) {
			throw new NotFoundException(__('Invalid announcement edit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AnnouncementEdit->save($this->request->data)) {
				$this->Session->setFlash(__('The announcement edit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The announcement edit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AnnouncementEdit.' . $this->AnnouncementEdit->primaryKey => $id));
			$this->request->data = $this->AnnouncementEdit->find('first', $options);
		}
		$contents = $this->AnnouncementEdit->Content->find('list');
		$this->set(compact('contents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AnnouncementEdit->id = $id;
		if (!$this->AnnouncementEdit->exists()) {
			throw new NotFoundException(__('Invalid announcement edit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AnnouncementEdit->delete()) {
			$this->Session->setFlash(__('The announcement edit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The announcement edit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
