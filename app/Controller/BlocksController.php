<?php
/**
 * Blocks Controller
 *
 * @property Block $Block
 * @property PaginatorComponent $Paginator
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
App::uses('AppController', 'Controller');

/**
 * Summary for Blocks Controller
 */
class BlocksController extends AppController {

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
		$this->Block->recursive = 0;
		$this->set('blocks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function view($id = null) {
		if (!$this->Block->exists($id)) {
			throw new NotFoundException(__('Invalid block'));
		}
		$options = array('conditions' => array('Block.' . $this->Block->primaryKey => $id));
		$this->set('block', $this->Block->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Block->create();
			if ($this->Block->save($this->request->data)) {
				$this->Session->setFlash(__('The block has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The block could not be saved. Please, try again.'));
			}
		}
		$pages = $this->Block->Page->find('list');
		$contents = $this->Block->Content->find('list');
		$modules = $this->Block->Module->find('list');
		$parentBlocks = $this->Block->ParentBlock->find('list');
		$this->set(compact('pages', 'contents', 'modules', 'parentBlocks'));
	}

/**
 * edit method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Block->exists($id)) {
			throw new NotFoundException(__('Invalid block'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Block->save($this->request->data)) {
				$this->Session->setFlash(__('The block has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The block could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Block.' . $this->Block->primaryKey => $id));
			$this->request->data = $this->Block->find('first', $options);
		}
		$pages = $this->Block->Page->find('list');
		$contents = $this->Block->Content->find('list');
		$modules = $this->Block->Module->find('list');
		$parentBlocks = $this->Block->ParentBlock->find('list');
		$this->set(compact('pages', 'contents', 'modules', 'parentBlocks'));
	}

/**
 * delete method
 *
 * @param string $id id
 * @throws NotFoundException
 * @return void
 */
	public function delete($id = null) {
		$this->Block->id = $id;
		if (!$this->Block->exists()) {
			throw new NotFoundException(__('Invalid block'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Block->delete()) {
			$this->Session->setFlash(__('The block has been deleted.'));
		} else {
			$this->Session->setFlash(__('The block could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
