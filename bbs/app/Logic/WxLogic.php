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
		$post = $GLOBALS["HTTP_RAW_POST_DATA"];
		
		$xml_tree = new \DOMDocument();
		$xml_tree->loadXML($post);
		$msgTypeArr = $xml_tree->getElementsByTagName('MsgType');
		$msgType = $msgTypeArr->item(0)->nodeValue;
		$contentArr = $xml_tree->getElementsByTagName('Content');
		$content = $contentArr->item(0)->nodeValue;
		
		$result['msgType'] = $msgType;
		$result['content'] = $content;
		var_dump($post);var_dump($result);
		return $result;
	}

}


