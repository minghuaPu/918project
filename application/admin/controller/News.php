<?php
namespace app\admin\controller;

class News extends \think\Controller
{
    public function index()
    {
    	$news_list  =  db('news')->order('id desc')->paginate(2);

    	$this->assign('news_list',$news_list);
        return $this->fetch();
    }

    public function add()
    {
    	return $this->fetch();
    }

    public function save()
    {
    	db('news')->insert(input());

    	$this->success('添加成功','index');
    }
}
