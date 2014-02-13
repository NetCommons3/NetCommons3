<?php
App::uses('AppController', 'Controller');
/**
 * Archives Controller
 *
 * @property Archive $Archive
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class ArchivesController extends AppController {

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
		$this->Archive->recursive = 0;
		$this->set('archives', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Archive->exists($id)) {
			throw new NotFoundException(__('Invalid archive'));
		}
		$options = array('conditions' => array('Archive.' . $this->Archive->primaryKey => $id));
		$this->set('archive', $this->Archive->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Archive->create();
			if ($this->Archive->save($this->request->data)) {
				$this->Session->setFlash(__('The archive has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The archive could not be saved. Please, try again.'));
			}
		}
		$parentArchives = $this->Archive->ParentArchive->find('list');
		$modules = $this->Archive->Module->find('list');
		$contents = $this->Archive->Content->find('list');
		$userGroups = $this->Archive->UserGroup->find('list');
		$this->set(compact('parentArchives', 'modules', 'contents', 'userGroups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Archive->exists($id)) {
			throw new NotFoundException(__('Invalid archive'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Archive->save($this->request->data)) {
				$this->Session->setFlash(__('The archive has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The archive could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Archive.' . $this->Archive->primaryKey => $id));
			$this->request->data = $this->Archive->find('first', $options);
		}
		$parentArchives = $this->Archive->ParentArchive->find('list');
		$modules = $this->Archive->Module->find('list');
		$contents = $this->Archive->Content->find('list');
		$userGroups = $this->Archive->UserGroup->find('list');
		$this->set(compact('parentArchives', 'modules', 'contents', 'userGroups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Archive->id = $id;
		if (!$this->Archive->exists()) {
			throw new NotFoundException(__('Invalid archive'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Archive->delete()) {
			$this->Session->setFlash(__('The archive has been deleted.'));
		} else {
			$this->Session->setFlash(__('The archive could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
