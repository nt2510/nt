<?php
namespace App\Logic;

/**
 * 微信
 * @author ntlee
 * @version 2017-07-05
 *
 */
class WxLogic extends BaseLogic 
{
	
	public function chkValid()
	{
		$echostr = $_GET['echostr'];
		if($this->chkSignature()){
			echo $echostr;
			exit;
		}
		
	}
	
	public function chkSignature()
	{
		$token = 'lifeng2017wx';
		$signature = $_GET["signature"];
		$timestamp = $_GET["timestamp"];
		$nonce = $_GET["nonce"];
						
		
		$array = array($token, $timestamp, $nonce);
		sort($array, SORT_STRING);
		$str = implode($array);
		$signatureVer = sha1($str);
		
		if($signature == $signatureVer){
			return true;
		}else{
			return false;
		}
	}
	
	public function getMsg()
	{
		//$post = $GLOBALS["HTTP_RAW_POST_DATA"];
		//$post = $_POST;
		$post = file_get_contents("php://input");
		$xml_tree = new \DOMDocument();
		$xml_tree->loadXML($post);
		$msgTypeArr = $xml_tree->getElementsByTagName('MsgType');
		$msgType = $msgTypeArr->item(0)->nodeValue;
		$contentArr = $xml_tree->getElementsByTagName('Content');
		$content = $contentArr->item(0)->nodeValue;
		$toUserNameArr = $xml_tree->getElementsByTagName('ToUserName');
		$toUserName = $toUserNameArr->item(0)->nodeValue;
		$fromUserNameArr = $xml_tree->getElementsByTagName('FromUserName');
		$fromUserName = $fromUserNameArr->item(0)->nodeValue;
		
		$result['msgType'] = $msgType;
		$result['content'] = $content;
		$result['toUserName'] = $toUserName;
		$result['fromUserName'] = $fromUserName;
		
		return $result;
	}
	
	public function responseMsg($params)
	{
		$tml = "<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%d</CreateTime><MsgType><![CDATA[text]]></MsgType><Content><![CDATA[%s]]></Content></xml>";
		$toUserName = $params['toUserName'];
		$fromUserName = $params['fromUserName'];
		$createtime = time();
		$content = $params['content'] ? $params['content'] : '';
		$msg  =sprintf($tml,$toUserName,$fromUserName,$createtime,$content);
		
		return $msg;
	}
	
	public function getToken()
	{
		$tplUrl = "%scgi-bin/token?grant_type=client_credential&appid=%s&secret=%s";
		$domain = "https://api.weixin.qq.com/";
		$appid = "wxa45a5acfbc36a358";
		$secrect = "6f22c1cf74fa0a596023f87c64b2baae";
		$url = sprintf($tplUrl,$domain,$appid,$secrect);
		
		$ch = curl_init($url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//跳过证书验证
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // 从证书中检查SSL加密算法是否存在
		$res = curl_exec($ch);		
		curl_close($ch);
		$resArr = json_decode($res, true);var_dump($res);print_r($resArr);
		$access_token = $resArr['access_token'];
		return $access_token;
	}
	
	
}


