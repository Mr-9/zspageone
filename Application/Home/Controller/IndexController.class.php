<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(IS_POST){
                    //处理表单提交
                    $post = I('post.');
                    // dump($post);
                    $model = M('Dept');
                    $result = $model -> add($post);
                    if($result){
                        //成功
                        $this -> success('添加成功');
                    }else{
                        //失败
                        $this ->error('添加失败');
                    }
                }else{
                    //展示模板
                    $this ->display();
                }
        }
}