<?php


namespace app\index\controller;


use app\common\Unit;

class Index
{
    public function index(){
        $res = Unit::test();
        //$res = Unit::class;
        return json($res);
    }
}