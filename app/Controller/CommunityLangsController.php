<?php
App::uses('AppController', 'Controller');
/**
 * CommunityLangs Controller
 *
 * @property CommunityLang $CommunityLang
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class CommunityLangsController extends AppController {

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
		$this->CommunityLang->recursive = 0;
		$this->set('communityLangs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CommunityLang->exists($id)) {
			throw new NotFoundException(__('Invalid community lang'));
		}
		$options = array('conditions' => array('CommunityLang.' . $this->CommunityLang->primaryKey => $id));
		$this->set('communityLang', $this->CommunityLang->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CommunityLang->create();
			if ($this->CommunityLang->save($this->request->data)) {
				$this->Session->setFlash(__('The community lang has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The community lang could not be saved. Please, try again.'));
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
		if (!$this->CommunityLang->exists($id)) {
			throw new NotFoundException(__('Invalid community lang'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CommunityLang->save($this->request->data)) {
				$this->Session->setFlash(__('The community lang has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The community lang could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CommunityLang.' . $this->CommunityLang->primaryKey => $id));
			$this->request->data = $this->CommunityLang->find('first', $options);
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
		$this->CommunityLang->id = $id;
		if (!$this->CommunityLang->exists()) {
			throw new NotFoundException(__('Invalid community lang'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CommunityLang->delete()) {
			$this->Session->setFlash(__('The community lang has been deleted.'));
		} else {
			$this->Session->setFlash(__('The community lang could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
