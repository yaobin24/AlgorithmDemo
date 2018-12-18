<?php
// +----------------------------------------------------------------------
// | 自动加载实现代码
// +----------------------------------------------------------------------
// | author    武安y<yaobin24@126.com>
// +----------------------------------------------------------------------
// | note
// +----------------------------------------------------------------------
// | Date       2018/12/12 Time: 下午3:42
// +----------------------------------------------------------------------

function loadprint( $class ) {
    $class = preg_replace("/\\\\/","/",$class);
    $file = dirname(__DIR__).'/'.$class . '.php';
    if (is_file($file)) {
        require_once($file);
    }
}