<?php
/**
 * Created by PhpStorm.
 * User: SIT-ZZ-03
 * Date: 2016/01/14
 * Time: 16:25
 */

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