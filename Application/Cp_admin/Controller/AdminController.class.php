<?php
namespace Cp_admin\Controller;
use Think\Controller;
class AdminController extends Controller {
	/*关于我们已有内容后台页面显示*/
    public function index(){
        $uid = session('userinfo');
        if(empty($uid)){
            $this->error('请登录后再进行相关操作',U('Index/index'),3);
        }
    	$ab=D('about')->find();
    	$this->assign('ab',$ab);
    	$this->display();
    }
    /*更新关于我们内容信息*/
    public function saveabout(){
    	$data = array();
    	$data['id']=1;//所更新内容id
    	$data['count']=trim($_POST['editorValue']);//获取富文本编辑器里面内容
    	$res=M('about')->save($data);//更新数据库
    	if($res){
    		$this->success('更新成功');
    	}else{
    		$this->error('更新失败');
    	}
    }
    /*联系我们内容后台页面显示*/
    public function callus(){
        $uid = session('userinfo');
        if(empty($uid)){
            $this->error('请登录后再进行相关操作',U('Index/index'),3);
        }
    	$con=D('contact')->find();
    	$this->assign('con',$con);
    	$this->display();
    }
    /*更新联系我们内容*/
    public function savelianxi(){
    	$upload = new \Think\Upload();// 实例化上传类
    	$upload->maxSize   =     10485760 ;// 设置图片上传大小
    	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置图片上传类型
    	$upload->rootPath  =     './Uploads/callus/'; // 设置图片上传根目录
    	$upload->savePath  =     ''; // 设置图片上传（子）目录
    	// 上传文件
    	$info   =   $upload->upload();
    	if(!$info) {// 上传错误提示错误信息
    		$this->error($upload->getError());
    	}else{// 上传成功
    		echo $info['savepath'].$info['savename'];
    	}
    	$data = array();
    	$data['id']=1;//更新内容id
    	$data['imgurl']="../../Uploads/callus/".$info['imgurl']['savepath'].$info['imgurl']['savename'];//上传图片保存路径
    	$data['tel']=trim($_POST['tel']);//联系方式
    	$data['fax']=trim($_POST['fax']);//传真
    	$data['mail']=trim($_POST['mail']);//邮箱
    	$data['address']=trim($_POST['address']);//地址
    	$data['zip_code']=trim($_POST['zip_code']);//邮政编码
    	$res=M('contact')->save($data);//更新数据库
    	if($res){
    		$this->success('更新成功');
    	}else{
    		$this->error('更新失败');
    	}
    }
    /*商业相关列表页后台显示*/
    public function images(){
        $uid = session('userinfo');
        if(empty($uid)){
            $this->error('请登录后再进行相关操作',U('Index/index'),3);
        }
    	$con=D('advertisement')->order('create_time desc')->select();
    	$this->assign('con',$con);
    	$this->display();
    }
    public function addc(){
        $uid = session('userinfo');
        if(empty($uid)){
            $this->error('请登录后再进行相关操作',U('Index/index'),3);
        }
        $this->display();
    }
    public function add_images(){
        $uid = session('userinfo');
        if(empty($uid)){
            $this->error('请登录后再进行相关操作',U('Index/index'),3);
        }
        $this->display();
    }
    public function add_movies(){
        $uid = session('userinfo');
        if(empty($uid)){
            $this->error('请登录后再进行相关操作',U('Index/index'),3);
        }
        $this->display();
    }
    /*商业相关图片上传*/
    public function addci(){
    	$upload = new \Think\Upload();// 实例化上传类
    	$upload->maxSize   =     10485760 ;// 设置图片上传大小
    	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置图片上传类型
    	$upload->rootPath  =     './Uploads/images/image/'; // 设置图片上传根目录
    	$upload->savePath  =     ''; // 设置图片上传（子）目录
    	// 上传文件
    	$info   =   $upload->upload();
    	if(!$info) {// 上传错误提示错误信息
    		$this->error($upload->getError());
    	}else{// 上传成功
	    	foreach($info as $file){
		        /* echo $file['savepath'].$file['savename']; */
		    }
    	}
    	$data = array();
    	$data['pic']="../../Uploads/images/image/".$info['pic1']['savepath'].$info['pic1']['savename'];//上传图片保存路径
    	$data['img']="../../Uploads/images/image/".$info['pic2']['savepath'].$info['pic2']['savename'];//上传图片保存路径
    	$data['name']=trim($_POST['name']);//标题
    	$data['state']=0;//上传主要文件类型 0代表图片文件  1代表视频文件
		$data['create_time'] = date("Y-m-d H:i:s");
    	$res=M('advertisement')->add($data);
    	if($res){
    		$this->success('新增成功',U('Admin/images'));
    	}else{
    		$this->error('新增失败');
    	}
    }
    /*商业相关视频上传*/
    public function addcm(){
    	$upload = new \Think\Upload();// 实例化上传类
    	$upload->maxSize   =     524288000 ;// 设置文件上传大小
    	$upload->allowExts      =     array('jpg', 'gif', 'png', 'jpeg','mov','mp4');// 设置文件上传类型
    	$upload->rootPath  =     './Uploads/images/movie/'; // 设置文件上传根目录
    	$upload->savePath  =     ''; // 设置文件上传（子）目录
    	// 上传文件
    	$info   =   $upload->upload();
    
    	if(!$info) {// 上传错误提示错误信息
    		$this->error($upload->getError());
    	}else{// 上传成功
    		foreach($info as $file){
    			/* echo $file['savepath'].$file['savename']; */
    		}
    	}
    	$data = array();
    	$data['pic']="../../Uploads/images/movie/".$info['pic']['savepath'].$info['pic']['savename'];
    	$data['img']="../../Uploads/images/movie/".$info['video_url']['savepath'].$info['video_url']['savename'];
    	$data['name']=trim($_POST['name']);
    	$data['state']=1;//上传主要文件类型 0代表图片文件  1代表视频文件
		$data['create_time'] = date("Y-m-d H:i:s");
    	$res=M('advertisement')->add($data);
    	if($res){
    		$this->success('新增成功',U('Admin/images'));
    	}else{
    		$this->error('新增失败');
    	}
    }
    /*商业相关删除操作*/
    public function deleimg(){
    	$id=$_GET['id'];//获取删除id
    	$db=M('advertisement');
		$res = $db->where('id='.$id)->find();
        $img_src = substr($res['pic'],6);
        $movie_src = substr($res['img'],6);
		if($res){
            unlink($img_src);
            unlink($movie_src);
        }
    	if($db->where("id=$id")->delete()){
    		$this->success('删除成功', U('Admin/images'));
    	}
    	else{
    		$this->error('删除失败');
    	}
    }
    /*影视相关列表页*/
    public function movies(){
        $uid = session('userinfo');
        if(empty($uid)){
            $this->error('请登录后再进行相关操作',U('Index/index'),3);
        }
    	$con=D('movie')->order('create_time desc')->select();
    	$this->assign('con',$con);
    	$this->display();
    }
    public function adds(){
        $uid = session('userinfo');
        if(empty($uid)){
            $this->error('请登录后再进行相关操作',U('Index/index'),3);
        }
        $this->display();
    }
    public function add_image(){
        $uid = session('userinfo');
        if(empty($uid)){
            $this->error('请登录后再进行相关操作',U('Index/index'),3);
        }
        $this->display();
    }
    public function add_movie(){
        $uid = session('userinfo');
        if(empty($uid)){
            $this->error('请登录后再进行相关操作',U('Index/index'),3);
        }
        $this->display();
    }
    /*影视相关图片上传*/
    public function addsi(){
    	$upload = new \Think\Upload();// 实例化上传类
    	$upload->maxSize   =     10485760 ;// 设置图片上传大小
    	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置图片上传类型
    	$upload->rootPath  =     './Uploads/movies/image/'; // 设置图片上传根目录
    	$upload->savePath  =     ''; // 设置图片上传（子）目录
    	// 上传文件
    	$info   =   $upload->upload();
    	if(!$info) {// 上传错误提示错误信息
    		$this->error($upload->getError());
    	}else{// 上传成功
    		foreach($info as $file){
    			/* echo $file['savepath'].$file['savename']; */
    		}
    	}
    	$data = array();
    	$data['pic']="../../Uploads/movies/image/".$info['pic1']['savepath'].$info['pic1']['savename'];
    	$data['img']="../../Uploads/movies/image/".$info['pic2']['savepath'].$info['pic2']['savename'];
    	$data['name']=trim($_POST['name']);
    	$data['state']=0;
		$data['create_time'] = date("Y-m-d H:i:s");
    	$res=M('movie')->add($data);
    	if($res){
    		$this->success('新增成功',U('Admin/movies'));
    	}else{
    		$this->error('新增失败');
    	}
    }
    /*影视相关视频上传*/
    public function addsm(){
    	$upload = new \Think\Upload();// 实例化上传类
    	$upload->maxSize   =     524288000 ;// 设置文件上传大小
    	$upload->allowExts      =     array('jpg', 'gif', 'png', 'jpeg','mov','mp4');// 设置文件上传类型
    	$upload->rootPath  =     './Uploads/movies/movie/'; // 设置文件上传根目录
    	$upload->savePath  =     ''; // 设置文件上传（子）目录
    	// 上传文件
    	$info   =   $upload->upload();
    
    	if(!$info) {// 上传错误提示错误信息
    		$this->error($upload->getError());
    	}else{// 上传成功
    		foreach($info as $file){
    			/* echo $file['savepath'].$file['savename']; */
    		}
    	}
    	$data = array();
    	$data['pic']="../../Uploads/movies/movie/".$info['pic']['savepath'].$info['pic']['savename'];
    	$data['img']="../../Uploads/movies/movie/".$info['video_url']['savepath'].$info['video_url']['savename'];
    	$data['name']=trim($_POST['name']);
    	$data['state']=1;//上传主要文件类型 0代表图片文件  1代表视频文件
		$data['create_time'] = date("Y-m-d H:i:s");
    	$res=M('movie')->add($data);
    	if($res){
    		$this->success('新增成功',U('Admin/movies'));
    	}else{
    		$this->error('新增失败');
    	}
    }
    /*影视相关删除操作*/
    public function delemov(){
    	$id=$_GET['id'];
    	$db=M('movie');
		$res = $db->where('id='.$id)->find();
        $img_src = substr($res['pic'],6);
        $movie_src = substr($res['img'],6);
		if($res){
            unlink($img_src);
            unlink($movie_src);
        }
    	if($db->where("id=$id")->delete()){
    		$this->success('删除成功', U('Admin/movies'));
    	}
    	else{
    		$this->error('删除失败');
    	}
    }
}