<?php
class GeneralHomeController extends ViewController {

	protected function control() {
		$this->render( array(
			'view' => 'general/index.php'
		));
	}
}
?>