<?php
class ContentHomeController extends ViewController {

	protected function control() {
		$this->render( array(
			'view' => 'content/index.php'
		));
	}
}
?>