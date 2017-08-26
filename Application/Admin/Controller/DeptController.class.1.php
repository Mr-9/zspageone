<?php
namespace Admin\Controller;
use Think\Controller;
class DeptController extends Controller {
    //战术实例化结果
    public function shilihua(){
        //普通实例化
        // $model = new \Admin\Model\DeptModel();
        // dump($model);
        //快速实例化M D 两个方法
        //D('模型名') 表达的含义是实例化我们自己创建的模型（分组/Model目录中）object(Admin\Model\DeptModel)[10]
        // 如果未传参数则实例化父类
        //M('不带前缀的表明') 表达的含义是直接实例化父类模型(Model.class.php) object(Think\Model)[10] 如果不传参数则不关联表，用于执行原生的sql语句

        //如果父类方法已经封装好了，则用M方法，如果需要自己开发，则用D方法
        // $model = D('dept');
        // $model = D();  //实例化父类
        // $model = M('dept');
        //M() -> query(原生的sql语句)
        // dump($model);
    }

    //增加操作add()   $model -> add(一维数组切必须是关联数组)
    public function tianjia(){
        //实例化模型
        $model = M('dept');
        //声明一个关联数组
        // $data = array(
        //     'name'   => '王',
        //     'tel'    => '13333333333',
        //     'sort'   => '1',
        //     'remark' => '程序员'
        // );
        // $result = $model -> add($data); //返回值是新增记录的主键id
        //二维数组键值以第一个为准
        $data = array(
            array(
                'name' => '李',
                'tel' =>'12322222222',
                'sort'=>'2',
                'remark'=>'技术'
                ),
            array(
                'name' => '刘',
                'tel' =>'12366666666',
                'sort'=>'3',
                'remark'=>'总经理'
                )
        );
        // $result = $model -> add($data); //返回值是新增记录的主键id
        $result = $model -> addAll($data); //返回值是新增记录的主键id
        dump($result);
    }

    //修改 save('一维关联数组') 一维关联数组要有主键信息 系统为了防止误操作，不容许批量修改
    public function xiugai(){
        //实例化模型
        $model =M('Dept');
        //数组
        $data =array(
            'id' => '2',
            'sort' => '2',
            'remark' => '修改'
        );
        //修改
        $result = $model -> save($data); //返回值表示影响的行数
        dump($result);
    }

    //查询操作 select() find() 
    // select()语法
    // $model -> select();                       //查询全部信息
    // $model -> select(id);                     //查询指定id的信息
    // $model -> select("id1,id2...");           //查询指定id的集合信息

    //$model -> find();                          //表示查询表中第一条记录
    //$model -> find(id);                        //表示查询中指定id的记录

    //select()返回的是二维数组   find()返回值是一维数组

    public function chaxun(){
        //实例化模型
        $model = M('Dept');
        //select
        $data = $model -> select();              //全部
        $data = $model -> select(2);             //指定id
        $data = $model -> select("1,3,5");             //指定id

        //find
        $data = $model -> find();             //第一条
        $data = $model -> find(3);             //指定id

        dump($data);
    }

    //删除  delete(id);  删除方法必须要有条件
        // $model ->delete(id);    //删除指定id
        // $model ->delete('id1,id2...');    //删除指定id

    public function shanchu(){
        //实例化模型
        $model = M('Dept');
        //删除操作
        // $result = $model -> delete(2);  //返回值表示受到印象的行数
        $result = $model -> delete('1,3');  //返回值表示受到印象的行数

        dump($result);
    }





















}