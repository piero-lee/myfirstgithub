<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/12
 * Time: 22:27
 */

namespace Home\Controller;
use Think\Controller;

class PublicController extends Controller
{
    protected $config = array('app_type' => 'public');

    public function login() {
        //$this -> assign("is_verify_code", get_system_config("login_verify_code"));
        $auth_id = session(C('USER_AUTH_KEY'));
        if (!isset($auth_id)) {
            $this -> display();
        } else {
            header('Location: ' . __APP__);
        }
    }

}