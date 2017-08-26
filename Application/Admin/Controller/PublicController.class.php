<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller{
    public function login(){
        $this -> display();
        // $str = $this -> fetch();
        // dump($str);
    }

    //验证码
    public function captcha(){
        //配置
                $cfg = array(
                    'codeSet'   =>  '2345678', 
                    'fontSize'  =>  20,              // 验证码字体大小(px)
                    'useCurve'  =>  false,            // 是否画混淆曲线
                    'useNoise'  =>  false,            // 是否添加杂点	
                    'length'    =>  4,               // 验证码位数
                    'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
                    'bg'        =>  array(93, 202, 27),  // 背景颜色
                );
                //实例化验证码类
                $verfiy = new \Think\Verify($cfg);
                //输出验证码
                $verfiy -> entry();
    }

    public function checklogin(){
        // $this -> success('登录成功',U('index/index'),3);
        $post = I('post.');

        // dump($capt);
        $verfiy = new \Think\Verify();
        //验证
        $result = $verfiy -> check($post['captcha']);

        if($result){
            //验证码正确
            //查询数据库
            $model = M('User');
            //删除验证码元素
            unset($post['captcha']);
            $data = $model -> where($post) -> find();
            if($data){
                //用户存在
                //用户信息持久化
                session('id',$data['id']);
                session('username',$data['username']);
                $this -> success('登录成功',U('Index/index'),3);
            }else{
                //用户名密码错误
                $this -> error('用户名密码错误','',1);
            }
        }else{
            //验证码错误
            $this -> error('验证码错误','',1);
        }
        // dump($result);
    }

    public function logout(){
        //清除session
        session(null);
        $this -> success('退出成功',U('login'),3);
    }

    
}