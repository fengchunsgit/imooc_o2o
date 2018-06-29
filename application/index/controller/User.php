<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2018/6/29
 * Time: 21:03
 */

namespace app\index\controller;


use think\Controller;

class User extends Controller
{
    //http://o2o.com/index.php?s=index/user/login
    public function login(){
        return $this->fetch();
    }

    //http://o2o.com/index.php?s=index/user/register
    public function register()
    {
        return $this->fetch();
    }

}