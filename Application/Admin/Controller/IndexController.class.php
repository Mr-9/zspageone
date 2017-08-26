<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    
    function __construct(){
        parent::__construct();
        $this->_initialize();
    }


    public function _initialize(){
        if(!session('username')){
            $this->redirect('public/login');
        }
    }

    public function index(){
        $this -> display();
    }
    public function home(){
        $this -> display();
    }
}