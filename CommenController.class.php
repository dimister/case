<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
		$this->display('index');
    }
	

	public function detail(){
		$this->display('detail');
    }

    public function mine(){
		$this->display('mine');
    }
	//获取token
	/*public function get_token(){
		// $appid="wxab385712ed3eb802";
		$appid="wxafc40485961e0364";//夺宝
		// $appsecret="a46a21efc9c12f09179ca4e2babf5f33";
		$appsecret="52b63af3e6e048dec587dc97835ed984";//夺宝
		$url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
		// header("location:".$url);
		$output=$this->curl_get($url);
		//解析json格式
		$result = json_decode($output,true);
		//存入变量session中
		$_SESSION['token']=$result['access_token'];
		//var_dump($result);
		echo json_encode($output);
	} */
	
	//获取微信服务器ip列表
	/*public function get_wxserveriplist(){
		$access_token=$_SESSION['token'];
		$url="https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=".$access_token;
		$output=$this->curl_get($url);
		echo $output;
	}*/
	
	//获取用户授权
	/*public function get_auth(){
		$appid="wxab385712ed3eb802";
		$redirecturl=urlencode("http://www.nmdiyo.cn/wx/Web/index.php/Home/Index/get_userinfo");
		$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$redirecturl."&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect";
		// $output=$this->curl_get($url);
		header("location:".$url);
		// echo $output;
	}*/

	//获取用户信息
	// public function get_userinfo(){
	// 	header("content-type:text/html;charset=utf8");
		
	// 	$info=$_GET;
	// 	//var_dump($user);
	// 	/*$appid="wxab385712ed3eb802";
	// 	$appsecret="a46a21efc9c12f09179ca4e2babf5f33";*/
	// 	$appid="wxab385712ed3eb802";
	// 	$appsecret="a46a21efc9c12f09179ca4e2babf5f33";
	// 	$code = $info['code'];
	// 	$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$appsecret."&code=".$code."&grant_type=authorization_code";
	// 	$output=$this->curl_get($url);
	// 	//echo $output;
	// 	$output = json_decode($output,true);
	// 	$access_token = $output['access_token'];
	// 	$openid = $output['openid'];
	// 	$url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$openid."&lang=zh_CN";
	// 	$output=$this->curl_get($url);
	// 	//echo $output;
	// 	$output = json_decode($output,true);
	// 	var_dump($output);
	// }

	// 客服消息
	// public function kefu_post(){
	// 	//固定参数
	// 	$access_token=$_SESSION['token'];
	// 	$kf_data="{'touser':'o6w46szvVo8JKO7Z-AysTuNT3YyE','msgtype':'text','text':{'content':'这是来自客服回复的消息''}}";
	// 	$url= "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=".$access_token;
	// 	$this->curl_post($url,$kf_data);
	// }
	
	// //获取二维码
	// public function get_code(){
	// 		//固定参数
	// 	$access_token=$_SESSION['token'];
	// 	// $access_token="C3SPzrIDiiGMdYpQ2Pq10LghoKdAcGt9JreSfJu_U8Hpo6Y_qeBl55WS3s_Nab6EFNtBFoC7-wMAnm0tcrT77YSUJJZp4ku4J7cV9B9wySLEpCBbzeHhyEp9zEmq79iOLIAiAEAEBT";
	// 	// $code_data="{'action_name': 'QR_SCENE', 'action_info': {'scene': {'scene_id': 123}}}";
	// 	$code_data=array(
	// 			'action_name'=>'QR_LIMIT_SCENE',
	// 			'action_info'=>array(
	// 					'scene'=>array('scene_id'=>1010)
	// 				)
	// 		);
	// 	$code_data=json_encode($code_data);
	// 	$url= "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=".$access_token;
	// 	$output=$this->curl_post($url,$code_data);
	// 	$output=json_decode($output,true);
	// 	// var_dump($output);
	// 	$output = json_decode($output,true);
	// 	echo "<img src='https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket={$output['ticket']}'>";

	// 	//换取二维码
	// 	$ticket=urlencode($output['ticket']);
	// 	$url="https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=".$ticket;
	// 	header("location:".$url);
	// }

	// //curl
	// private function curl_get($url){
	// 	//初始化curl
	// 	$ch = curl_init();
	// 	//设置curl选项
	// 	curl_setopt($ch,CURLOPT_URL,$url);
	// 	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	// 	curl_setopt($ch,CURLOPT_HEADER,0);
	// 	//curl_setopt($ch,CURLOPT_TIMEOUT,10);
	// 	//执行
	// 	$output = curl_exec($ch);
	// 	//关闭
	// 	return $output;
	// 	curl_close();
	// }

	// //curl post
	// private function curl_post($url,$data){
	// 	// $data = '{"expire_seconds": 604800, "action_name": "QR_SCENE", "action_info": {"scene": {"scene_id": 123}}}';
	// 	$ch = curl_init();
	// 	curl_setopt($ch, CURLOPT_URL, $url);
	// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// 	// post数据
	// 	curl_setopt($ch, CURLOPT_POST, 1);
	// 	// post的变量
	// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	// 	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
 //            'Content-Type: application/json; charset=utf-8',
 //            'Content-Length: ' . strlen($data)
 //        )
 //    );
	// 	$output = curl_exec($ch);
	// 	curl_close($ch);
	// 	return $output;

	// }
}
















