<?php
class BlockGrantsController extends AppController {

	var $name = 'BlockGrants';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BlockGrant->recursive = 0;
		$this->set('blockGrants', $this->paginate());
	}

    function display()
    {
        $year = $this->params['year'];
        $month = $this->params['month'];
        $date = $this->params['date'];
        $_query = $year .'-'. $month .'-'. $date;
        $this->set('data', $_query);
    }


	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BlockGrant.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('blockGrant', $this->BlockGrant->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BlockGrant->create();
			if ($this->BlockGrant->save($this->data)) {
				$this->Session->setFlash(__('The BlockGrant has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BlockGrant could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BlockGrant', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BlockGrant->save($this->data)) {
				$this->Session->setFlash(__('The BlockGrant has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BlockGrant could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BlockGrant->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BlockGrant', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BlockGrant->del($id)) {
			$this->Session->setFlash(__('BlockGrant deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
