<?php
/**
 * Created by PhpStorm.
 * User: Jiera
 * Date: 2015/12/1
 * Time: 13:20
 */
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
    public function show(){
        $User = M('Data');
        $User->create();
    }
}