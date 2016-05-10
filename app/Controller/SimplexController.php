<?php
class SimplexController extends AppController {
    public $components = array('Menu');
    public $uses = array('Link', 'Simplex');
    public function index() {
    $cat_menu = $this->Menu->getCatMenu();
    $this->set(compact('cat_menu'));

    }

}

?>
