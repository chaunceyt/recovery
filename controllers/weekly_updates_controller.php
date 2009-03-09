<?php
class WeeklyUpdatesController extends AppController {

	var $name = 'WeeklyUpdates';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->WeeklyUpdate->recursive = 0;
		$this->set('weeklyUpdates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid WeeklyUpdate.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('weeklyUpdate', $this->WeeklyUpdate->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->WeeklyUpdate->create();
			if ($this->WeeklyUpdate->save($this->data)) {
				$this->Session->setFlash(__('The WeeklyUpdate has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WeeklyUpdate could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid WeeklyUpdate', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->WeeklyUpdate->save($this->data)) {
				$this->Session->setFlash(__('The WeeklyUpdate has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WeeklyUpdate could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->WeeklyUpdate->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for WeeklyUpdate', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->WeeklyUpdate->del($id)) {
			$this->Session->setFlash(__('WeeklyUpdate deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>