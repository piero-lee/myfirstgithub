<?php
/**
 * Created by PhpStorm.
 * User: SIT-ZZ-03
 * Date: 2016/01/14
 * Time: 16:25
 */

//取得SystemConfig表中设置的值
function get_system_config($code) {
    $model = M("SystemConfig");
    $where['code'] = array('eq', $code);
    $count = $model -> where($where) -> count();
    if ($count > 1) {
        return $model -> where($where) -> getfield("val,name");
    } else {
        return $model -> where($where) -> getfield("val");
    }
}

// 检测输入的验证码是否正确，$code为用户输入的验证码字符串
function check_verify($code, $id = '') {
    $verify = new \Think\Verify();
    return $verify -> check($code, $id);
}

