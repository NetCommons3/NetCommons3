<?php
App::uses('AppController', 'Controller');
/**
 * UploadLinks Controller
 *
 * @property UploadLink $UploadLink
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class UploadLinksController extends AppController {

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
		$this->UploadLink->recursive = 0;
		$this->set('uploadLinks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UploadLink->exists($id)) {
			throw new NotFoundException(__('Invalid upload link'));
		}
		$options = array('conditions' => array('UploadLink.' . $this->UploadLink->primaryKey => $id));
		$this->set('uploadLink', $this->UploadLink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UploadLink->create();
			if ($this->UploadLink->save($this->request->data)) {
				$this->Session->setFlash(__('The upload link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload link could not be saved. Please, try again.'));
			}
		}
		$uploads = $this->UploadLink->Upload->find('list');
		$contents = $this->UploadLink->Content->find('list');
		$this->set(compact('uploads', 'contents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UploadLink->exists($id)) {
			throw new NotFoundException(__('Invalid upload link'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UploadLink->save($this->request->data)) {
				$this->Session->setFlash(__('The upload link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UploadLink.' . $this->UploadLink->primaryKey => $id));
			$this->request->data = $this->UploadLink->find('first', $options);
		}
		$uploads = $this->UploadLink->Upload->find('list');
		$contents = $this->UploadLink->Content->find('list');
		$this->set(compact('uploads', 'contents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UploadLink->id = $id;
		if (!$this->UploadLink->exists()) {
			throw new NotFoundException(__('Invalid upload link'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UploadLink->delete()) {
			$this->Session->setFlash(__('The upload link has been deleted.'));
		} else {
			$this->Session->setFlash(__('The upload link could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
