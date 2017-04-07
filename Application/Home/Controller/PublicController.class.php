<?php
namespace Home\Controller;
use Think\Controller;
Load('extend');
class PublicController extends Controller {
    public function head($link){
        $jsapiTicket = getJsApiTicket();
        // 注意 URL 一定要动态获取，不能 hardcode.
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $timestamp = time();
        $nonceStr= createNonceStr();

        // 这里参数的顺序要按照 key 值 ASCII 码升序排序
        $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";
        $signature = sha1($string);
        $signPackage = array(
            "appId"     => 'wx1c29e6872c450e74',
            "nonceStr"  => $nonceStr,
            "timestamp" => $timestamp,
            "url"       => $url,
            "signature" => $signature,
            "rawString" => $string
        );
        $this->assign('res',$signPackage);

        $data['title']='思陌广告';
        $data['link']=$link;
        $data['imgUrl']='http://www.simo-ad.com/Public/style/images/share.jpg';
        $data['desc']='成都思陌广告有限责任公司是一家从事企业形象定制的专业机构。';
        $this->assign('share',$data);
    }
}