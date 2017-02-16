<?php
namespace Home\Controller;
use Think\Controller;
Load('extend');
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function commercial(){
    	$com=D('advertisement')->order('create_time desc')->select();
    	$this->assign('com',$com);
    	
    	$ui['c']='bg';
    	$this->assign('ui',$ui);
    	
    	$this->display();
    }
    public function cnry(){
    	$model= D('advertisement');
    	$id = $_GET['id'];
		$id = intval($id);
		
		$where['id'] = $id;
		$result = $model->where($where)->find();
		$state=$result['state'];
		if($state==0){
			$this->assign('signed',0);
		}else{
			$this->assign('signed',1);
		}
		
		$ui['c']='bg';
		$this->assign('ui',$ui);
		
    	$this->assign('images',$result);
    	$this->display();
    }
    public function movie(){
    	$com=D('movie')->order('create_time desc')->select();
    	
    	$ui['m']='bg';
    	$this->assign('ui',$ui);
    	
    	$this->assign('com',$com);
    	$this->display();
    }
    public function mnry(){
    	$model= D('movie');
    	$id = $_GET['id'];
    	$id = intval($id);
    
    	$where['id'] = $id;
    	$result = $model->where($where)->find();
    	$state=$result['state'];
    	if($state==0){
    		$this->assign('signed',0);
    	}else{
    		$this->assign('signed',1);
    	}
    	
    	$ui['m']='bg';
    	$this->assign('ui',$ui);
    	
    	$this->assign('images',$result);
    	$this->display();
    }
    public function about(){
    	$ab=D('about')->find();
    	
    	$ui['a']='bg';
    	$this->assign('ui',$ui);
    	
    	$this->assign('ab',$ab);
    	$this->display();
    }
    public function client(){
    	$link=D('link')->select();
    	$this->assign('link',$link);
    	$this->display();
    }
    public function contact(){
    	$con=D('contact')->find();
    	
    	$ui['co']='bg';
    	$this->assign('ui',$ui);
    	
    	$this->assign('con',$con);
    	$this->display();
    }
}