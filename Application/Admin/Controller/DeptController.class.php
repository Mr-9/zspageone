<?php
namespace Admin\Controller;
use Think\Controller;
class DeptController extends Controller {

    function __construct(){
        parent::__construct();
        $this->_initialize();
    }

    public function _initialize(){
        if(!session('username')){
            $this->redirect('public/login');
        }
    }

    public function add(){
        
        if(IS_POST){
            //处理表单提交
            $post = I('post.');
            // dump($post);
            $model = M('Dept');
            $result = $model -> add($post);
            if($result){
                //成功
                $this -> success('添加成功',U('showList'),3);
            }else{
                //失败
                $this ->error('添加失败');
            }
        }else{
            //展示模板
            $this ->display();
        }
    }

    public function showList(){
        $model = M('Dept');

        //分页第一步
        $count = $model -> count();
        //分页第二步实例化分页类传递参数
        $page = new \Think\Page($count,12); //每页显示1条
        //分页第三步定制分页按钮的提示文字
        $page -> rollPage = 4;
        $page -> lastSuffix = false;
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('last','末页');
        $page -> setConfig('first','首页');
        //分页第四步通过show方法输出分页的url链接
        $show = $page -> show();
        //分页第五步 查询数据
        $data = $model -> limit($page -> firstRow,$page -> listRows) -> order('sort asc') -> select();
        //分页第六部 传递给模板
        $this -> assign('data',$data);
        $this -> assign('show',$show);
        ///分页第七部 展示模板
        $this ->display();
    }

    public function edit(){
        if(IS_POST){
            $post = I('post.');
            // dump($post);die;
            $model = M('Dept');
            $result = $model -> save($post);
            if($result !== false){
                //修改成功
                $this -> success('修改成功',U('showList'),3);
            }else{
                //修改失败
                $this -> error('修改失败');
            }
        }else{
            $id = I('get.id');
            $model = M('Dept');
            $data = $model -> find($id);
            $this -> assign('data',$data);
            $this -> display();
        }
    }


}