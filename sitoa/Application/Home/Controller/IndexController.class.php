<?php
namespace Home\Controller;

class IndexController extends HomeController {

    protected $config = array('app_type' => 'public');
    public function index(){
        $this -> display();
    }
}