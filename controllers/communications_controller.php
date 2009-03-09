<?php
class CommunicationsController extends AppController {

	var $name = 'Communications';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Communication->recursive = 0;
		$this->set('communications', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Communication.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('communication', $this->Communication->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Communication->create();
			if ($this->Communication->save($this->data)) {
				$this->Session->setFlash(__('The Communication has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Communication could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Communication', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Communication->save($this->data)) {
				$this->Session->setFlash(__('The Communication has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Communication could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Communication->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Communication', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Communication->del($id)) {
			$this->Session->setFlash(__('Communication deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>