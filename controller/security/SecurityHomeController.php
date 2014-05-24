<?php
class SecurityHomeController extends ViewController {

	protected function control() {
		$this->render( array(
			'view' => 'security/index.php'
		));
	}
}
?>