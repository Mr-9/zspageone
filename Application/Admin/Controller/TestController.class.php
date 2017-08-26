<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller{

    public function test(){
        // echo 'hello word';
        $var = date('Y-m-d H:i:s',time());
        //变量分配
        $this -> assign('var',$var);
        $this -> display();


    }

    //U()方法提供url的组装
    //thinkphp中的快速方法包括： A B C D E F G I M R S 
    //U('分组名/控制器名/方法名',array('id1'=>100,'id2'=>200))
    //配置文件中的url访问形式影响U方法的输出格式

    public function test1(){
        echo U('index');
    }
    public function test2(){
        //可以指定控制器和方法
        echo U('index/index');
    }
    public function test3(){
        //给指定页面传递参数
        echo U('index/index',array('id'=>100,'id2'=>200));
    }

    //tp中的跳转形式
    // 成功
    // $this -> success(跳转提示,跳转地址,等待时间);
    // 跳转提示必须要有，跳转提示，时间可以没有，如果不设跳转到上一页
    //失败
    // $this -> error(跳转提示,跳转地址,等待时间);
    public function test4(){
        //成功
        $this -> success('操作成功',U('test'),10);
    }
    public function test5(){
        //失败
        $this -> error('操作失败',U('test4'),3);
    }

    //模板常量的替换机制
    // thinkphp中常用的模板常量替换机制
    //  __MODULE__      (/public/index.php/Admin)从域名后开始一直到分组名结束的路由为止
    //  __CONTROLLER__  (/public/index.php/Admin/Test)从域名后一直到控制器结束的路由
    //  __ACTION__      (/public/index.php/Admin/Test/test6)从域名后面一直到方法名结束的路由
    //__PUBLIC__        (/public/Public )表示域名后面根目录下面的pubilc目录(站点的公告目录)
    //  __SELF__        (/public/index.php/Admin/Test/test6/id/100)表示当前的页面地址

    //展示模板
    public function test6(){
        $this -> display();
    //模板内容获取方法
        $this -> fetch();
    }

    // {/*快注释   属于服务器端注释   不会在源代码输出*/}
    // 行注释{//块注释 属于服务器端注释 不会在源代码中输出}
    public function test7(){
        $this -> display();
    }

    //一维数组  二维数组  三维数组  四维数组
    public function test8(){
        //定义一维数组{$array[0]}  或者 {$array.0}
        $array = array(
            '西游记','红楼梦','水浒','三国'
        );
        //定义一个二维数组
        $array1 = array(
            array('白骨精','大师兄','二师兄','三师兄'),
            array('白骨精1','大师兄1','二师兄1','三师兄1'),
            array('白骨精2','大师兄2','二师兄2','三师兄2'),
            array('白骨精3','大师兄3','二师兄3','三师兄3'),
        );

        $this -> assign('array',$array);
        $this -> assign('array1',$array1);

        //展示模板
        $this -> display();

    }

        //变量分配(对象)
        public function test9(){
            $stu = new Student();
            //给类的属性赋值
            $stu -> id = 100;
            $stu -> name = '马东';
            $stu -> sex = '男';
            // dump($stu);
            $this -> assign('stu',$stu);
            $this -> display();
        }

        //系统全局变量
        /*
        $Think.server   相当于$_SERVER 获取服务器的相关信息
        $Think.get      相当于$_GET
        $Think.post     相当于$_POST
        $Think.request  相当于$_REQUEST  GET和POST的合集
        $Think.cookie   相当于$_COOKIE
        $Think.session  相当于$_SESSION
        $Think.config   获取tinkphp中所有配置文件的总和，如果后面指定了元素，则获取指定元素的配置     
        
        使用的时候语法格式,例如：
        {$Think.get.id}

        */
        public function test10(){
            $this -> display();
        }

        //视图中使用函数
        //函数名一定是php内定的
        //语法格式
        //{$变量|函数名}
        //{$变量|函数名1|函数名2=参数1，参数2}

        //案例时间戳的格式化
        public function test11(){
            //定义时间戳
            $time = time();
            $str = 'AbcdEfGHigk';
            $this -> assign('time',$time);
            $this -> assign('str',$str);
            $this -> display();

        }
        
        //默认值
        //语法格式
        // {$变量名|default=默认值}

        public function test12(){
            //定义一个空字符串 可以直接用tp的默认值的方法，或者用原生的php方法
            $sign = '';
            $sign = $sign?:'<span style="color:#B1A6A6">什么都没有</span>';
            $this -> assign('sign',$sign);
            $this -> display();
        }

        //thinkphp支持在模板中进行运算
        // {$a+$b}  {$a-$b}   {$a*$b}  {$a/$b}  {$a%$b}  {$a++}  {$a--}
        public function test13(){
            //定义两个变量
            $a = '10';
            $b = '4';
            $this -> assign('a',$a);
            $this -> assign('b',$b);
            $this -> display();
        }

        //文件包含
        //<include file='Application/Admin/View/Test/head.html'/>
        //可以简写成<include file='Test/head'/>
        //include 可以给模板传递参数
        // <include file='需要引入的模板文件' 参数名='参数值' />
        //模板中用[参数名]

        public function head(){
            $this -> display();
        }
        public function body(){
            $this -> display();
        }
        public function foot(){
            $this -> display();
        }

        //遍历数组
        /*
        <volist name='需要遍历的模板变量名' id='当前遍历到的元素'>
        循环体
        </volist>
        
        <foreach name='需要遍历的模板变量名' item='当前遍历的元素'>
        循环体
        </foreach>

        volist除了上述属性外还支持更多的属性，如mod key length而  foreach只支持item key
        
        */
        public function test14(){
            //定义一维数组
            $array = array(
                '西游记','红楼梦','水浒','三国'
            );
            //定义二维数组
            $array2 = array(
                array('白骨精','大师兄','二师兄','三师兄'),
                array('白骨精1','大师兄1','二师兄1','三师兄1'),
                array('白骨精2','大师兄2','二师兄2','三师兄2'),
                array('白骨精3','大师兄3','二师兄3','三师兄3'),
            );
            $this -> assign('array',$array);
            $this -> assign('array2',$array2);
            $this -> display();
        }

            //if标签
            // <if condition='条件表达式'>
            // 输出结果1
            // <elseif condition='条件表达式2'>
            // 输出结果2
            // ...
            // <else/>
            // 最后一个输出
            // </if>

            public function test15(){
                //输出今天的星期数字
                $day = date('N',time());
                // dump($day);
                $this -> assign('day',$day);
                $this -> display();
            }

            //php标签
            // 第一种：php内置的php标签    
            //第二种：Thinkphp封装的php标签  <php> PHP代码段 </php> 

            public function test16(){
                $this->display();
            }

            //常规验证码
            // 实例化验证码
            public function test41(){
                //配置
                $cfg = array(
                    'fontSize'  =>  12,              // 验证码字体大小(px)
                    'useCurve'  =>  false,            // 是否画混淆曲线
                    'useNoise'  =>  false,            // 是否添加杂点	
                    'imageH'    =>  0,               // 验证码图片高度
                    'imageW'    =>  0,               // 验证码图片宽度
                    'length'    =>  4,               // 验证码位数
                    'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
                );
                //实例化验证码类
                $verfiy = new \Think\Verify($cfg);
                //输出验证码
                $verfiy -> entry();
            }

            //中文验证码
            public function test42(){
                //配置
                $cfg = array(
                    'useZh'     =>  true,           // 使用中文验证码 
                    'zhSet'     =>  '们以我到他会作时要动国产的一是工就年阶义发成部民可出能方进在了不和有大这主中人上为来分生对于学下级地个用同行面说种过命度革而多子后自社加小机也经力线本电高量长党得实家定深法表着水理化争现所二起政三好十战无农使性前等反体合斗路图把结第里正新开论之物从当两些还天资事队批点育重其思与间内去因件日利相由压员气业代全组数果期导平各基或月毛然如应形想制心样干都向变关问比展那它最及外没看治提五解系林者米群头意只明四道马认次文通但条较克又公孔领军流入接席位情运器并飞原油放立题质指建区验活众很教决特此常石强极土少已根共直团统式转别造切九你取西持总料连任志观调七么山程百报更见必真保热委手改管处己将修支识病象几先老光专什六型具示复安带每东增则完风回南广劳轮科北打积车计给节做务被整联步类集号列温装即毫知轴研单色坚据速防史拉世设达尔场织历花受求传口断况采精金界品判参层止边清至万确究书术状厂须离再目海交权且儿青才证低越际八试规斯近注办布门铁需走议县兵固除般引齿千胜细影济白格效置推空配刀叶率述今选养德话查差半敌始片施响收华觉备名红续均药标记难存测士身紧液派准斤角降维板许破述技消底床田势端感往神便贺村构照容非搞亚磨族火段算适讲按值美态黄易彪服早班麦削信排台声该击素张密害侯草何树肥继右属市严径螺检左页抗苏显苦英快称坏移约巴材省黑武培著河帝仅针怎植京助升王眼她抓含苗副杂普谈围食射源例致酸旧却充足短划剂宣环落首尺波承粉践府鱼随考刻靠够满夫失包住促枝局菌杆周护岩师举曲春元超负砂封换太模贫减阳扬江析亩木言球朝医校古呢稻宋听唯输滑站另卫字鼓刚写刘微略范供阿块某功套友限项余倒卷创律雨让骨远帮初皮播优占死毒圈伟季训控激找叫云互跟裂粮粒母练塞钢顶策双留误础吸阻故寸盾晚丝女散焊功株亲院冷彻弹错散商视艺灭版烈零室轻血倍缺厘泵察绝富城冲喷壤简否柱李望盘磁雄似困巩益洲脱投送奴侧润盖挥距触星松送获兴独官混纪依未突架宽冬章湿偏纹吃执阀矿寨责熟稳夺硬价努翻奇甲预职评读背协损棉侵灰虽矛厚罗泥辟告卵箱掌氧恩爱停曾溶营终纲孟钱待尽俄缩沙退陈讨奋械载胞幼哪剥迫旋征槽倒握担仍呀鲜吧卡粗介钻逐弱脚怕盐末阴丰雾冠丙街莱贝辐肠付吉渗瑞惊顿挤秒悬姆烂森糖圣凹陶词迟蚕亿矩康遵牧遭幅园腔订香肉弟屋敏恢忘编印蜂急拿扩伤飞露核缘游振操央伍域甚迅辉异序免纸夜乡久隶缸夹念兰映沟乙吗儒杀汽磷艰晶插埃燃欢铁补咱芽永瓦倾阵碳演威附牙芽永瓦斜灌欧献顺猪洋腐请透司危括脉宜笑若尾束壮暴企菜穗楚汉愈绿拖牛份染既秋遍锻玉夏疗尖殖井费州访吹荣铜沿替滚客召旱悟刺脑措贯藏敢令隙炉壳硫煤迎铸粘探临薄旬善福纵择礼愿伏残雷延烟句纯渐耕跑泽慢栽鲁赤繁境潮横掉锥希池败船假亮谓托伙哲怀割摆贡呈劲财仪沉炼麻罪祖息车穿货销齐鼠抽画饲龙库守筑房歌寒喜哥洗蚀废纳腹乎录镜妇恶脂庄擦险赞钟摇典柄辩竹谷卖乱虚桥奥伯赶垂途额壁网截野遗静谋弄挂课镇妄盛耐援扎虑键归符庆聚绕摩忙舞遇索顾胶羊湖钉仁音迹碎伸灯避泛亡答勇频皇柳哈揭甘诺概宪浓岛袭谁洪谢炮浇斑讯懂灵蛋闭孩释乳巨徒私银伊景坦累匀霉杜乐勒隔弯绩招绍胡呼痛峰零柴簧午跳居尚丁秦稍追梁折耗碱殊岗挖氏刃剧堆赫荷胸衡勤膜篇登驻案刊秧缓凸役剪川雪链渔啦脸户洛孢勃盟买杨宗焦赛旗滤硅炭股坐蒸凝竟陷枪黎救冒暗洞犯筒您宋弧爆谬涂味津臂障褐陆啊健尊豆拔莫抵桑坡缝警挑污冰柬嘴啥饭塑寄赵喊垫丹渡耳刨虎笔稀昆浪萨茶滴浅拥穴覆伦娘吨浸袖珠雌妈紫戏塔锤震岁貌洁剖牢锋疑霸闪埔猛诉刷狠忽灾闹乔唐漏闻沈熔氯荒茎男凡抢像浆旁玻亦忠唱蒙予纷捕锁尤乘乌智淡允叛畜俘摸锈扫毕璃宝芯爷鉴秘净蒋钙肩腾枯抛轨堂拌爸循诱祝励肯酒绳穷塘燥泡袋朗喂铝软渠颗惯贸粪综墙趋彼届墨碍启逆卸航衣孙龄岭骗休借',              // 中文验证码字符串
                    'useImgBg'  =>  false,           // 使用背景图片 
                    'fontSize'  =>  25,              // 验证码字体大小(px)
                    'useCurve'  =>  false,            // 是否画混淆曲线
                    'useNoise'  =>  false,            // 是否添加杂点	
                    'imageH'    =>  0,               // 验证码图片高度
                    'imageW'    =>  0,               // 验证码图片宽度
                    'length'    =>  4,               // 验证码位数
                    'fontttf'   =>  'simhei.ttf',              // 验证码字体，不设置随机获取
                );

                $verfiy = new \Think\Verify($cfg);
                //输出验证码
                $verfiy -> entry();
            }

            








}


















