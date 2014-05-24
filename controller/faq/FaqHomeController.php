<?php
class FaqHomeController extends ViewController {

	protected function control() {
		$this->render( array(
			'view' => 'faq/index.php'
		));
	}
}
?>