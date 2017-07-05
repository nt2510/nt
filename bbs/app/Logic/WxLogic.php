<?php
namespace App\Logic;


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

}


