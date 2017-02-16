<?php
namespace Cp_admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
    	$this->display();
    }
    public function login(){
        $Verify = new \Think\Verify();
        if(!$Verify->check(I('code'))){
            $this->error('验证码错误',U('index'),3);
        }
            $username=I('name');
            $pwd=I('pwd');
            if ($username == '' || $pwd == '') {
                $this->error('信息不完整,请稍后再试',U('index'),3);
            }else{
                $where['name']=$username;
                $where['password'] = md5($pwd);
                $row = M('User')->where($where)->find();
                if(!$row){
                    $this->error('用户名或密码错误',U('index'),3);
                }else{
                    session('userinfo', $row['id']);
                    $this->redirect('Admin/index');
                }
            }
    }
    /*生成验证码*/
    function verifyImg(){
    	/*定义验证码参数*/
        $Verify = new \Think\Verify();
        $Verify->codeSet = '0123456789';
        $Verify->imageH = 28;
        $Verify->imageW = 100;
        $Verify->fontSize = 16;
        $Verify->length = 4;
        $Verify->useCurve = FALSE;
        $Verify->entry();
    }
   /*退出登录*/
    function unlogin(){
    	session(null);
    	$this->redirect('index');
    }
}