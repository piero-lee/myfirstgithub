<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/12
 * Time: 22:27
 */

namespace Home\Controller;
use Think\Controller;

class PublicController extends Controller {

    protected $config = array('app_type' => 'public');

    public function login() {
        $this -> assign("is_verify_code", get_system_config("login_verify_code"));
        $auth_id = session(C('USER_AUTH_KEY'));
        if (!isset($auth_id)) {
            $this -> display();
        } else {
            header('Location: ' . __APP__);
        }
    }

    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    private function check_verify($code, $id = '') {
        $verify = new \Think\Verify();
        return $verify -> check($code, $id);
    }

    // 登录检测
    public function check_login() {
        $check = $this -> check_verify($_POST['verify'],'');
        if (!$check) {
            $this -> error('验证码错误！');
        }
    }

    /**生成验证码*/
    public function verify_c(){
        $config = array('fontSize' => 15, // 验证码字体大小
            'length' => 4,                 // 验证码位数
            'useNoise' => false,         // 关闭验证码杂点
            'fontttf' => '5.ttf',        // 选择验证码字体
            'useImgBg' => true,          // 开启背景图片
            //'useZh' => true              // 使用中文
        );
        ob_clean();
        $verify = new \Think\Verify($config);
        $verify -> entry();
    }



}