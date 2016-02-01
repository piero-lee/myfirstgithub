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

    // 登录检测
    public function check_login() {
        // 检验电子邮箱是否为空
        if(empty($_POST['email'])){
            $this->error(C('MSG_EMAIL_NULL'));
        }
        // 检验登录密码是否为空
        if(empty($_POST['pwd'])){
            $this -> error(C('MSG_PWD_NULL'));
        }
        // 检验验证码是否为空
   //     if(empty($_POST['verify'])){
   //         $this->error(C('MSG_VERIFY_NULL'));
   //     }
        // 检验验证码是否正确
  //      $check = check_verify($_POST['verify'],'');
   //     if (!$check) {
    //        $this -> error(C('MSG_VERIFY_CHECK'));
    //    }

        // 电子邮箱存在CHECK
        $model = M("User");
        $map = array();
        $map['emp_no'] = $_POST['email'];
        $map["is_del"] = array('eq', 0);
        $email_info = $model -> where($map) -> find();
        if(false == $email_info){
            $this -> error(C('MSG_EMAIL_NOTEXISTED'));
        }

        // 登录密码CHECK
        $map['password']=array('eq',md5($_POST['pwd']));
        $pwd_info = $model -> where($map) -> find();
        if(false == $pwd_info){
            $this -> error(C('MSG_PWD_ERROR'));
        }

        // 将用户的登录信息更新到USER表中
        $User = M('User');
        $ip = get_client_ip();
        $time = time();
        $data = array();
        $data['id'] = $pwd_info['id'];
        $data['last_login_time'] = $time;
        $data['login_count'] = array('exp', 'login_count+1');
        $data['last_login_ip'] = $ip;
        $User -> save($data);

        //SESSION中保存相应信息，用于画面跳转
        session(C('USER_AUTH_KEY'), $pwd_info['id']);
        // 画面跳转
        $this -> assign('jumpUrl', U("Index/index"));
        header('Location: ' . U("Index/index"));
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