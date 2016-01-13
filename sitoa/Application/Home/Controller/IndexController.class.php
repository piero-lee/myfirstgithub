<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

    protected $config = array('app_type' => 'public');
    public function index(){
        echo get_system_config("login_verify_code");
    }
}